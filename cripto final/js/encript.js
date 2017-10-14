function lerArquivo(e){
    var arquivo = e.target.files[0];
    if (!arquivo) {
      return;
    }
}

function encriptar(e){
    var key = '123asd1';
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var contents = e.target.result;
        var encriptado = CryptoJS.AES.encrypt(e.target.result, key);

        var a = document.getElementById('download-cript');
        var button = document.getElementById('encriptado-button');
        a.href = 'data:application/octet-stream,' + encriptado;
        a.download = file.name + '.aes';
        a.classList.remove("disabled");
        button.classList.remove("disabled");
    };
    reader.readAsText(file);
    alert("O arquivo foi encriptografado");
    
}

function decriptar(e){
    var key = '123asd1';
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var contents = e.target.result;
        var decriptado = CryptoJS.AES.decrypt(e.target.result, key).toString(CryptoJS.enc.Latin1);
        var a = document.getElementById('download-decript');
        var button = document.getElementById('decriptado-button');
        a.href = 'data:application/octet-stream,' + decriptado;
        a.download = file.name + '.txt';
        a.classList.remove("disabled");
        button.classList.remove("disabled");
    };
    reader.readAsText(file);
    alert("O arquivo foi decriptado");
}

document.getElementById('cript-input')
.addEventListener('change', encriptar, false);

document.getElementById('decript-input')
.addEventListener('change', decriptar, false);
