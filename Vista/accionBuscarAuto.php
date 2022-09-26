<?php
include_once '../configuracion.php';

$datos = data_submitted(); //Devuelve un array = Array([Patente] => X)
//verEstructura($datos);

$obj =NULL;
if (isset($datos['Patente'])){ //Si existe un objeto con Patente, obtengo el objeto Auto con todos sus datos
    $objAbmAuto = new AbmAuto();
    $listaAuto = $objAbmAuto->buscar($datos);
    //verEstructura($listaAuto);
    if (count($listaAuto)==1){
        $obj= $listaAuto[0];
    }
}

    

?>

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

<?php   

 if(count($listaAuto)>0){
  echo '<span class="titulo2">Información del Auto</span><br>';
  echo '<table class="table table-bordered">';

   echo '<tr><td id="tituloTabla">'."PATENTE".'</td>';
   echo '<td id="tituloTabla">'."MARCA".'</td>';
   echo '<td id="tituloTabla">'."MODELO".'</td>';
   echo '<td id="tituloTabla">'."DNI DUEÑO".'</td><tr>';
    
    foreach ($listaAuto as $objAuto) {
        echo '<tr><td id="subtituloTabla">'.$objAuto->getPatente().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getMarca().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getModelo().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getDniDuenio().'</td>'; 
    }
    echo '</table>';
}

if(count($listaAuto)==0){
    echo '<span class="titulo2">NO SE ENCONTRO EL AUTO CON LA PATENTE INGRESADA</span><br>';
}


?>
<br/>
<a class="linkVolver" href="buscarAuto.php">Volver</a>

