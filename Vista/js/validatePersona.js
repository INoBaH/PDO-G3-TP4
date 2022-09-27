const patronLetras = /[A-Za-z]/;
const patronNumeros = /[0-9]/;
const patronCarEsp = /[!"#$%&/()={}+*¡?'|°]/;
const anioActual = new Date();
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
    const fechaAnio = new Date(fechaNac).getFullYear();
    const fechaMes =new Date(fechaNac).getMonth();
    if (fechaNac != "" && fechaAnio <= anioActual.getFullYear() && fechaMes <= anioActual.getMonth()) {
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

var form = document.getElementById('Formulario');
form.onsubmit = function (e) {
    e.preventDefault();
    const borde1 = document.getElementById("NroDni").style.borderColor;
    const borde2 = document.getElementById("Apellido").style.borderColor;
    const borde3 = document.getElementById("Nombre").style.borderColor;
    const borde4 = document.getElementById("fechaNac").style.borderColor;
    const borde5 = document.getElementById("Telefono").style.borderColor;
    const borde6 = document.getElementById("Domicilio").style.borderColor;

    if (borde1 == "green" && borde2 == "green" && borde3 == "green" && borde4 == "green" && borde5 == "green" && borde6 == "green") {
        form.submit();
    } else {
        if (borde1 == "green") {
        } else if (borde1 == "red" || document.getElementById("NroDni").value == "") {
            document.getElementById("NroDni").style.transition = "0.4s";
            document.getElementById("NroDni").style.border = "solid 2px red";
            document.getElementById("NroDni").value = "";
        }
        if (borde2 == "green") {
        } else if (borde2 == "red" || document.getElementById("Apellido").value == "") {
            document.getElementById("Apellido").style.transition = "0.4s";
            document.getElementById("Apellido").style.border = "solid 2px red";
            document.getElementById("Apellido").value = "";
        }

        if (borde3 == "green") {
        } else if (borde3 == "red" || document.getElementById("Nombre").value == "") {
            document.getElementById("Nombre").style.transition = "0.4s";
            document.getElementById("Nombre").style.border = "solid 2px red";
            document.getElementById("Nombre").value = "";
        }

        if (borde4 == "green") {
        } else if (borde4 == "red" || document.getElementById("fechaNac").value == "") {
            document.getElementById("fechaNac").style.transition = "0.4s";
            document.getElementById("fechaNac").style.border = "solid 2px red";
            document.getElementById("fechaNac").value = "";
        }

        if (borde5 == "green") {
        } else if (borde4 == "red" || document.getElementById("Telefono").value == "") {
            document.getElementById("Telefono").style.transition = "0.4s";
            document.getElementById("Telefono").style.border = "solid 2px red";
            document.getElementById("Telefono").value = "";
        }

        if (borde6 == "green") {
        } else if (borde4 == "red" || document.getElementById("Domicilio").value == "") {
            document.getElementById("Domicilio").style.transition = "0.4s";
            document.getElementById("Domicilio").style.border = "solid 2px red";
            document.getElementById("Domicilio").value = "";
        }
    }
}
