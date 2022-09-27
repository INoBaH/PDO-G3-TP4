<!DOCTYPE html>
<html lang="es">

<head>
<title>Ejercicio 7</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">
    <span class="titulo2">Ejercicio 7</span><br><br>

    <form method="post" id="Formulario" action="accionNuevoAuto.php">

        <label>Patente</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="Patente" name="Patente" class="form-control" autocomplete="off" maxlength="10" required style="text-transform: uppercase;">
        </div><br>

        <label>Marca</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="Marca" name="Marca" class="form-control" autocomplete="off" maxlength="50" required>
        </div><br>

        <label>Modelo</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="Modelo" name="Modelo" class="form-control" autocomplete="off" maxlength="11" required>
        </div><br>

        <label>Numero de documento</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="DniDuenio" name="DniDuenio" class="form-control" autocomplete="off" maxlength="12" required>
        </div><br><br>

        <div class="form-group col-md-12">
            <button class="btn btn-responsive" type="submit" id="botonBuscar" title="Insertar">Insertar</button>
        </div>

    </form><br><br>

<a class="linkVolver" href="../index.php">Menu</a><br>
</div>
</div>
<script src="js/validateAuto.js"></script>
</body>
</html>

<style type="text/css">
.input-group { 
  width: 33%;
}
</style>