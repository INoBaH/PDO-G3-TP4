const patronLetras = /[A-Za-z]/;
const patronNumeros = /[0-9]/;
const patronCarEsp = /[!"#$%&/()={}+*¡?'|°]/;

//Persona
document.getElementById('NroDni').addEventListener('change', function () {
    const nDni = document.getElementById('NroDni').value;
    if (!(patronLetras.test(nDni)) && (patronNumeros.test(nDni)) && !(patronCarEsp.test(nDni))) {
        document.getElementById("NroDni").style.transition = "0.5s";
        document.getElementById("NroDni").style.border = "solid 2px green";
    } else {
        document.getElementById("NroDni").style.transition = "0.5s";
        document.getElementById("NroDni").style.border = "solid 2px red";
    }
    if (String(nDni).length > 9) {
        document.getElementById("NroDni").style.transition = "0.5s";
        document.getElementById("NroDni").style.border = "solid 2px red";
    }
    if (nDni == "") {
        document.getElementById("NroDni").style.transition = "0.3s";
        document.getElementById("NroDni").style.border = "solid 1px #3181C3";
    }
});
document.getElementById('Apellido').addEventListener('change', function () {
    const Apellido = document.getElementById('Apellido').value;
    if ((patronLetras.test(Apellido)) && !(patronNumeros.test(Apellido)) && !(patronCarEsp.test(Apellido))) {
        document.getElementById("Apellido").style.transition = "0.5s";
        document.getElementById("Apellido").style.border = "solid 2px green";
    } else {
        document.getElementById("Apellido").style.transition = "0.5s";
        document.getElementById("Apellido").style.border = "solid 2px red";
    }
    if (String(Apellido).length > 50) {
        document.getElementById("Apellido").style.transition = "0.5s";
        document.getElementById("Apellido").style.border = "solid 2px red";
    }
    if (Apellido == "") {
        document.getElementById("Apellido").style.transition = "0.3s";
        document.getElementById("Apellido").style.border = "solid 1px #3181C3";
    }
});
document.getElementById('Nombre').addEventListener('change', function () {
    const Nombre = document.getElementById('Nombre').value;
    if ((patronLetras.test(Nombre)) && !(patronNumeros.test(Nombre)) && !(patronCarEsp.test(Nombre))) {
        document.getElementById("Nombre").style.transition = "0.5s";
        document.getElementById("Nombre").style.border = "solid 2px green";
    } else {
        document.getElementById("Nombre").style.transition = "0.5s";
        document.getElementById("Nombre").style.border = "solid 2px red";
    }
    if (String(Nombre).length > 50) {
        document.getElementById("Nombre").style.transition = "0.5s";
        document.getElementById("Nombre").style.border = "solid 2px red";
    }
    if (Nombre == "") {
        document.getElementById("Nombre").style.transition = "0.3s";
        document.getElementById("Nombre").style.border = "solid 1px #3181C3";
    }
});
document.getElementById('fechaNac').addEventListener('change', function () {
    const fechaNac = document.getElementById('fechaNac').value;
    if ((patronLetras.test(fechaNac)) && !(patronNumeros.test(fechaNac)) && !(patronCarEsp.test(fechaNac))) {
        document.getElementById("fechaNac").style.transition = "0.5s";
        document.getElementById("fechaNac").style.border = "solid 2px green";
    } else {
        document.getElementById("fechaNac").style.transition = "0.5s";
        document.getElementById("fechaNac").style.border = "solid 2px red";
    }
    if (fechaNac == "") {
        document.getElementById("fechaNac").style.transition = "0.3s";
        document.getElementById("fechaNac").style.border = "solid 1px #3181C3";
    }
});
document.getElementById('Telefono').addEventListener('change', function () {
    const Telefono = document.getElementById('Telefono').value;
    if (!(patronLetras.test(Telefono)) && (patronNumeros.test(Telefono)) && !(patronCarEsp.test(Telefono))) {
        document.getElementById("Telefono").style.transition = "0.5s";
        document.getElementById("Telefono").style.border = "solid 2px green";
    } else {
        document.getElementById("Telefono").style.transition = "0.5s";
        document.getElementById("Telefono").style.border = "solid 2px red";
    }
    if (String(Telefono).length > 20) {
        document.getElementById("Telefono").style.transition = "0.5s";
        document.getElementById("Telefono").style.border = "solid 2px red";
    }
    if (Telefono == "") {
        document.getElementById("Telefono").style.transition = "0.3s";
        document.getElementById("Telefono").style.border = "solid 1px #3181C3";
    }
});
document.getElementById('Domicilio').addEventListener('change', function () {
    const Domicilio = document.getElementById('Domicilio').value;
    if ((patronLetras.test(Domicilio)) && (patronNumeros.test(Domicilio)) && !(patronCarEsp.test(Domicilio))) {
        document.getElementById("Domicilio").style.transition = "0.5s";
        document.getElementById("Domicilio").style.border = "solid 2px green";
    } else {
        document.getElementById("Domicilio").style.transition = "0.5s";
        document.getElementById("Domicilio").style.border = "solid 2px red";
    }
    if (String(Domicilio).length > 200) {
        document.getElementById("Domicilio").style.transition = "0.5s";
        document.getElementById("Domicilio").style.border = "solid 2px red";
    }
    if (Domicilio == "") {
        document.getElementById("Domicilio").style.transition = "0.3s";
        document.getElementById("Domicilio").style.border = "solid 1px #3181C3";
    }
});