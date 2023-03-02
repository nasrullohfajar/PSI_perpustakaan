<!DOCTYPE html>
<html>
<head>
	<title>Scanner</title>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    
</head>
<body>
    <h1>Scan Buku</h1>
    <form action="/pinjam" method="get" class="form-horizontal mt-3">
        <input type="text" name="text" id="text" readonlyy="" placeholder="scan qrcode" class="form-control">
    </form>
    <video id="preview"></video>
    <script src="<?php echo base_url('js/scanner.js') ?>"></script><br><br>
    <a href="/buku" class="btn btn-primary" role="button btn-sm"> Kembali</a>
</body>
</html>
