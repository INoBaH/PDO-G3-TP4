<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio 8</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>



<body class="fondo"><br><br>
<div class="container" align="center">
    <span class="titulo2">Ejercicio 8</span><br><br>

	<form method="post" action="accionCambioDuenio.php">

		<label>Patente</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="Patente" name="Patente" class="form-control" autocomplete="off" maxlength="10" required style="text-transform: uppercase;">
        </div><br>

        <label>Número de documento</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="DniDuenio" name="DniDuenio" class="form-control" autocomplete="off" maxlength="10" required>
        </div><br>
		
		<div class="form-group col-md-12">
            <button class="btn btn-responsive" type="submit" id="botonBuscar" title="Editar">Editar</button>
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