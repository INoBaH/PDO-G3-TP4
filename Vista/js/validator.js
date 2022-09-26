const patronLetras = /[A-Za-z]/;
const patronNumeros = /[0-9]/;
const patronCarEsp = /[!"#$%&/()={}+*¡?'|°]/;
document.getElementById('Patente').addEventListener('change', function () {
    const patente = document.getElementById('Patente').value;
    if (patronLetras.test(patente) && (patronNumeros.test(patente)) && !(patronCarEsp.test(patente))) {
        document.getElementById("Patente").style.transition = "0.5s";
        document.getElementById("Patente").style.border = "solid 2px green";
    }   else {
        document.getElementById("Patente").style.transition = "0.5s";
        document.getElementById("Patente").style.border = "solid 2px red";
    }
    if (String(patente).length > 10) {
        document.getElementById("Modelo").style.transition = "0.5s";
        document.getElementById("Modelo").style.border = "solid 2px red";
    }
    if (patente == "") {
        document.getElementById("Patente").style.transition = "0.3s";
        document.getElementById("Patente").style.border = "solid 1px #3181C3";
    }
});
document.getElementById('Modelo').addEventListener('change', function () {
    const modelo = document.getElementById('Modelo').value;
    if (!(patronLetras.test(modelo)) && (patronNumeros.test(modelo)) && !(patronCarEsp.test(modelo))) {
        document.getElementById("Modelo").style.transition = "0.5s";
        document.getElementById("Modelo").style.border = "solid 2px green";
    }  else {
        document.getElementById("Modelo").style.transition = "0.5s";
        document.getElementById("Modelo").style.border = "solid 2px red";
    }
    if (String(modelo).length > 11) {
        document.getElementById("Modelo").style.transition = "0.5s";
        document.getElementById("Modelo").style.border = "solid 2px red";
    } else if (String(modelo).length < 1) {
        document.getElementById("Modelo").style.transition = "0.5s";
        document.getElementById("Modelo").style.border = "solid 2px red";
    }
    if (modelo == "") {
        document.getElementById("Modelo").style.transition = "0.3s";
        document.getElementById("Modelo").style.border = "solid 1px #3181C3";
    }
});
document.getElementById('Marca').addEventListener('change', function () {
    const marca = document.getElementById('Marca').value;
    if ((patronLetras.test(marca)) || (patronNumeros.test(marca)) && !(patronCarEsp.test(marca))) {
        document.getElementById("Marca").style.transition = "0.5s";
        document.getElementById("Marca").style.border = "solid 2px green";
    } else {
        document.getElementById("Marca").style.transition = "0.5s";
        document.getElementById("Marca").style.border = "solid 2px red";
    }
    if (String(marca).length > 50) {
        document.getElementById("Marca").style.transition = "0.5s";
        document.getElementById("Marca").style.border = "solid 2px red";
    } else if (String(marca).length < 1) {
        document.getElementById("Marca").style.transition = "0.5s";
        document.getElementById("Marca").style.border = "solid 2px red";
    }
    if (marca == "") {
        document.getElementById("Marca").style.transition = "0.3s";
        document.getElementById("Marca").style.border = "solid 1px #3181C3";
    }
});
document.getElementById('DniDuenio').addEventListener('change', function () {
    const dni = document.getElementById('DniDuenio').value;
    if (!(patronLetras.test(dni)) || (patronNumeros.test(dni)) && !(patronCarEsp.test(dni))) {
        document.getElementById("DniDuenio").style.transition = "0.5s";
        document.getElementById("DniDuenio").style.border = "solid 2px green";
    } else {
        document.getElementById("DniDuenio").style.transition = "0.5s";
        document.getElementById("DniDuenio").style.border = "solid 2px red";
    }
    if (String(dni).length > 10) {
        document.getElementById("DniDuenio").style.transition = "0.5s";
        document.getElementById("DniDuenio").style.border = "solid 2px red";
    } else if (String(dni).length < 1) {
        document.getElementById("DniDuenio").style.transition = "0.5s";
        document.getElementById("DniDuenio").style.border = "solid 2px red";
    }
    if (dni == "") {
        document.getElementById("DniDuenio").style.transition = "0.3s";
        document.getElementById("DniDuenio").style.border = "solid 1px #3181C3";
    }
});
