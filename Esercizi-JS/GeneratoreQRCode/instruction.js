var genQR = document.getElementById("genQR");
var QRCode = document.getElementById("immagine");

genQR.addEventListener('click', function() {

    var data = document.getElementById("testo").value;
    var size = document.getElementById("size").value;
    var color = document.getElementById("color").value;
    var bgcolor = document.getElementById("bgcolor").value;

    QRCode.innerHTML = '<img src="http://api.qrserver.com/v1/create-qr-code/?' +
        'data=' + data + '&' +
        'size=' + size + 'x' + size + '&' +
        'color=' + color + '&' +
        'bgcolor=' + bgcolor + '"/>';
});