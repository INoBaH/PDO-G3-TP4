<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title>Ejercicio 6</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilos.css?v50">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">
	<span class="titulo2">Ejercicio 6</span><br><br>

		<form method="post" action="accionNuevaPersona.php">
			<label>Numero de documento</label><br/>
			<div class="input-group mx-auto">
        		<input type="text" id="NroDni" name="NroDni" class="form-control" autocomplete="off" maxlength="10" required="">
      		</div><br>

			<label>Apellido</label><br/>
			<div class="input-group mx-auto">
        		<input type="text" id="Apellido" name="Apellido" class="form-control" autocomplete="off" maxlength="50" required="">
      		</div><br>

			<label>Nombre</label><br/>
			<div class="input-group mx-auto">
        		<input type="text" id="Nombre" name="Nombre" class="form-control" autocomplete="off" maxlength="50" required="">
      		</div><br>

      		<label>Fecha de nacimiento</label><br/>
			<div class="input-group mx-auto">
        		<input type="date" id="fechaNac" name="fechaNac" class="form-control" required="">
      		</div><br>

			<label>Telefono</label><br/>
			<div class="input-group mx-auto">
        		<input type="text" id="Telefono" name="Telefono" class="form-control" autocomplete="off" maxlength="200" required="">
      		</div><br>

			<label>Dirección</label><br/>
			<div class="input-group mx-auto">
        		<input type="text" id="Domicilio" name="Domicilio" class="form-control" autocomplete="off" maxlength="200" required="">
      		</div><br><br>

			<div class="form-group col-md-12">
                <button class="btn btn-responsive" type="submit" id="botonBuscar" title="Insertar">Insertar</button>
            </div>
		</form>

<br><br>

<a class="linkVolver" href="../index.php">Menu</a><br>
</div>
</div>
<script src="js/validatePersona.js"></script>
</body>
</html>

<style type="text/css">
.input-group { 
  width: 33%;
}
</style>