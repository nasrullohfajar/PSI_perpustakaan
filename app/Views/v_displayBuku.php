<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
    <h1>Data Buku</h1>
    <a href="/scanner"class="btn btn-primary" role="button"> Scan Buku</a> <br><br>
    <table border="1" width = 100%>
        <tr>
            <th>no</th>
            <th>id</th>
            <th>nama buku</th>
            <th>stok</th>
            <th>opsi</th>
        </tr>

        <?php
            $no = 1;
            if(!empty($databuku)){
                foreach($databuku as $data){?>
                <tr>
                    <td><?=$no;?></td>
                    <td><?=$data['id'];?></td>
                    <td><?=$data['nama'];?></td>
                    <td><?=$data['stok'];?></td>
                    <td><a href="<?= base_url('/pinjam/'.$data['id']) ?>" class="btn btn-primary" role="button class="btn btn-primary" role="button"">Beli</a></td>
                </tr>
        <?php
            $no++;
            }
        }
        ?>
    </table>
</body>
</html>