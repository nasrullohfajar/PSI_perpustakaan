<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\m_dataBuku;
use CodeIgniter\HTTP\AjaxResponse;


class c_dataBuku extends Controller{
    
    function __construct(){

        $this->databuku = new m_dataBuku();
    }

    public function display(){

        $data['databuku'] = $this->databuku->getData();
        return view('v_displayBuku', $data);
    }

    public function pinjam($id)
    {
        $this->databuku->pinjamBuku($id);
        return redirect()->to(base_url('buku'));
    }
}
