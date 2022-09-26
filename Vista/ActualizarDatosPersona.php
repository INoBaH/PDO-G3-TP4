<?php 
include_once '../configuracion.php';

$datos = data_submitted();
//verEstructura($datos);

$resp = false;
$objPersona = new AbmPersona();

if($objPersona->modificacion($datos)){
    $resp = true;
}

if($resp==true){
	$mensaje = "SE MODIFICARON LOS DATOS";
}
else{
	$mensaje = "NO SE MODIFICARON LOS DATOS";
}

?>

<head>
<title>Ejercicio 9</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Vista/css/estilos.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../Vista/css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">

<span class="titulo2"><?php echo $mensaje;?></span><br>

<a class="linkVolver" href="../index.php">Menu</a><br>
</div>
</body>
</html>