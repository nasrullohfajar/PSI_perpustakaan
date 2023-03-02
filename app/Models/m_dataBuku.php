<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class m_dataBuku extends Model{

    protected $table = 'databuku';
    protected $primarykey = 'id';
    protected $returntype = "array";
    protected $allowedFields = ['id', 'nama', 'stok'];

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getData(){

        $query = $this->db->query("SELECT * FROM databuku");
        return $query->getResultArray();
    }

    public function pinjamBuku($id){

    $query = $this->db->query("SELECT * FROM databuku WHERE id = $id");
    $result = $query->getRowArray();

        if ($result) {
            $stok = $result['stok'];
            if ($stok > 0) {
                $stok--;
                $builder = $this->db->table('databuku');
                $builder->where('id', $id);
                $builder->update(['stok' => $stok]);
            }
        }
    }

}