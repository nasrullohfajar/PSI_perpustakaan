let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
scanner.addListener('scan', function (content) {
    // Mendeteksi jenis barcode
    const code = content.substring(0, 13);
    let jenisBarcode = "";
    switch (code) {
        case "001":
            jenisBarcode = "Buku 001";
            //document.getElementById('text').value = content;
            //document.forms[0].submit();
            break;
        case "002":
            jenisBarcode = "Buku 002";
            break;
        case "003":
            jenisBarcode = "Buku 003";
            break;
        default:
            jenisBarcode = "Tidak dikenal";
            break;
    }
    console.log('Barcode jenis ' + jenisBarcode + ' terdeteksi');
});
Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
        scanner.start(cameras[0]);
    } else {
        console.error('No cameras found.');
    }
}).catch(function (e) {
    console.error(e);
});