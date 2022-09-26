<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio 4</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Vista/css/estilos.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../Vista/css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">

<span class="titulo2">Ejercicio 4</span><br><br>


		<form method="POST" action="accionBuscarAuto.php">
            
            <div class="form-group col-md-2">
                <span>Nro de Patente</span><br>
                <input class="form-control" id="Patente" name="Patente" type="text" maxlength="10" autocomplete="off" style="border-color: black; border-radius: 10px; text-align: center; text-transform: uppercase;" required="" >
            </div><br>
            
            <div class="form-group col-md-12">
                <button class="btn btn-responsive" type="submit" id="botonBuscar" title="Ingresar patente">Buscar</button>
            </div>

        </form>

<a class="linkVolver" href="../index.php">Menu</a><br>
<script src="js/validator.js"></script>
</body>
</html>