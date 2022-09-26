<?php
include_once "../configuracion.php";
$objAbmAuto = new AbmAuto();
$listaAuto = $objAbmAuto->buscar(null);
?>	


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Vista/css/estilos.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../Vista/css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">

<span class="titulo2">Ejercicio 3</span><br>

<?php	
if( count($listaAuto)>0){
  echo '<span class="titulo2">Información de los Autos</span><br>';
  echo '<table class="table table-bordered">';

   echo '<tr><td id="tituloTabla">'."PATENTE".'</td>';
   echo '<td id="tituloTabla">'."MARCA".'</td>';
   echo '<td id="tituloTabla">'."MODELO".'</td>';
   echo '<td id="tituloTabla">'."DNI DUEÑO".'</td>';
   echo '<td id="tituloTabla">'."NOMBRE DUEÑO".'</td>';
   echo '<td id="tituloTabla">'."APELLIDO DUEÑO".'</td><tr>';
    
    foreach ($listaAuto as $objAuto) {
        echo '<tr><td id="subtituloTabla">'.$objAuto->getPatente().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getMarca().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getModelo().'</td>';
        echo '<td id="subtituloTabla">'.$objAuto->getDniDuenio().'</td>';
        
        $arrayPersona = ["NroDni" => $objAuto->getDniDuenio()];
        $objAbmPersona = new AbmPersona();
        $persona = $objAbmPersona->buscar($arrayPersona);
        foreach ($persona as $objPersona) {
          echo '<td id="subtituloTabla">'.$objPersona->getNombre().'</td>';
          echo '<td id="subtituloTabla">'.$objPersona->getApellido().'</td></tr>';
        } 
	}
  echo '</table>';
}

else{
  echo '<br>';
  echo '<span class="titulo2">No hay autos cargados</span><br>';
}

?>
<a class="linkVolver" href="../index.php">Menu</a><br>
</div>
</body>
</html>