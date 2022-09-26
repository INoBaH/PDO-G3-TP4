<?php
include_once '../configuracion.php';
$datos = data_submitted(); 
//verEstructura($datos);

$arrayPersona = ["NroDni" => $datos['NroDni']];
$objAbmPersona = new AbmPersona();
$persona = $objAbmPersona->buscar($arrayPersona);
$resp = false;


if (count($persona)==1){
    $mensaje = "Ya existe una persona con el documento ingresado";
}
else{
	if($objAbmPersona->alta($datos)){
    	$resp =true;
	}
	if($resp){
    	$mensaje = "La inserción se realizo correctamente.";
	}else {
    	$mensaje = "La inserción no pudo concretarse.";
	}
}

?>

<head>
<title>Ejercicio 5</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Vista/css/estilos.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../Vista/css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">

<span class="titulo2"><?php echo $mensaje;?></span><br>

<a class="linkVolver" href="NuevaPersona.php">Volver</a><br>
</div>
</body>
</html>