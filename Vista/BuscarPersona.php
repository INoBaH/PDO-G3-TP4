<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title>Ejercicio 9</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Vista/css/estilos.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../Vista/css/bootstrap.min.css">
</head>


<body class="fondo"><br><br>
<div class="container" align="center">

<span class="titulo2">Ejercicio 9</span><br><br>


<form method="post" action="accionBuscarPersona.php">

    <label>Número de documento</label><br/>
        <div class="input-group mx-auto">
            <input type="text" id="NroDni" name="NroDni" class="form-control" autocomplete="off" maxlength="10" required>
        </div><br>

    <div class="form-group col-md-12">
        <button class="btn btn-responsive" type="submit" id="botonBuscar" title="Buscar">Buscar</button>
     </div>
</form>

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