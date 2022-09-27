<?php
include_once '../configuracion.php';
$datos = data_submitted(); 

//verEstructura($datos);

$arrayAuto = ["Patente" => $datos['Patente']];
$objAbmAuto = new AbmAuto();
$auto = $objAbmAuto->buscar($arrayAuto);
$resp = false;

if (count($auto)==1){
    $mensaje = "Ya existe un auto con la patente ingresada";
}
else{
	$arrayPersona = ["NroDni" => $datos['DniDuenio']];
	$objAbmPersona = new AbmPersona();

	if ($objAbmPersona->buscar($arrayPersona)) {
    	if($objAbmAuto->alta($datos)){ 
        	$resp =true;
    	}
} 	else {
    	$resp=false;
	}
	if($resp){
    	$mensaje = "La inserción se realizo correctamente";
	}else {
    	$mensaje = "La inserción no pudo concretarse ya que NO existe la persona con el documento ingresado<br> Te dejo un link para que te registres:
    	<a class='linkVolver' href='NuevaPersona.php'>Alta Persona</a>";
	}
}

?>

<head>
<title>Solicitud Procesada</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Vista/css/estilos.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../Vista/css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">

<span class="titulo2"><?php echo $mensaje;?></span><br>

<a class="linkVolver" href="NuevoAuto.php">Volver</a><br>
</div>
</body>
</html>