<?php
include_once '../configuracion.php';

$datos = data_submitted(); //Devuelve un array = Array([Patente] => XXX, [DniDuenio] => XXX)
//verEstructura($datos);


$obj =NULL;
if (isset($datos['Patente'])){ 

    $objAbmAuto = new AbmAuto();
    $arrayAuto = ["Patente" => $datos['Patente']];
    $listaAuto = $objAbmAuto->buscar($arrayAuto); //Obtengo un array con el objeto Auto - Si no existe devuelve un array vacio

    //$obj= $listaAuto[0];

    $objAbmPersona = new AbmPersona();
    $arrayPersona = ["NroDni" => $datos['DniDuenio']];
    $listapersona = $objAbmPersona->buscar($arrayPersona);


    //verEstructura($listaAuto);
    if (count($listaAuto)==1){
        $salida = false;
        if (count($listapersona)==1){
        	//$arrayModificacion = ["Patente" => $datos['Patente'], "DniDuenio" => $datos['NroDni'], "Modelo" => "", "Marca" => "" ];
        	
        	if($objAbmAuto->modificacionDuenio($datos)){
        		$salida = true;
        	}
        	if($salida){
        		$mensaje = "SE ASIGNO LA PERSONA CON DOCUMENTO ".$datos['DniDuenio']." AL AUTO CON PATENTE ".$datos['Patente'];
        	}
        	else{
        		$mensaje =  "ERROR AL ASIGNAR A LA PERSONA CON DOCUMENTO ".$datos['DniDuenio']." EL AUTO CON PATENTE ".$datos['Patente'];
        	}

        }
        else{
    		$mensaje =  "NO SE ENCONTRO EL DOCUMENTO INGRESADO";
    	}
    }
    else{
    	$mensaje =  "NO SE ENCONTRO PATENTE CON EL VALOR INGRESADO";
    }
}
   

?>



<head>
<title>Ejercicio 8</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Vista/css/estilos.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../Vista/css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">

<span class="titulo2"><?php echo $mensaje;?></span><br>

<a class="linkVolver" href="cambioDuenio.php">Volver</a><br>
</div>
</body>
</html>