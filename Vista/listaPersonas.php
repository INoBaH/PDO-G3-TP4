<?php
include_once "../configuracion.php";
$objAbmPersona = new AbmPersona();
$listaPersona = $objAbmPersona->buscar(null);

?>	


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio 5</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Vista/css/estilos.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../Vista/css/bootstrap.min.css">
</head>

<body class="fondo"><br><br>
<div class="container" align="center">

<span class="titulo2">Ejercicio 5</span><br>
<?php	

  if(count($listaPersona)>0){
    echo '<span class="titulo2">Información de las personas</span><br>';
    echo '<table class="table table-bordered">';

    echo '<tr><td id="tituloTabla">'."NRO DNI".'</td>';
    echo '<td id="tituloTabla">'."NOMBRE".'</td>';
    echo '<td id="tituloTabla">'."APELLIDO".'</td>';
    echo '<td id="tituloTabla">'."FECHA NACIMIENTO".'</td>';
    echo '<td id="tituloTabla">'."TELEFONO".'</td>';
    echo '<td id="tituloTabla">'."DOMICILIO".'</td>';
    echo '<td id="tituloTabla">'."ACCIONES".'</td><tr>';
    
    foreach ($listaPersona as $objPersona) {
        echo '<tr><td id="subtituloTabla">'.$objPersona->getNroDni().'</td>';
        echo '<td id="subtituloTabla">'.$objPersona->getNombre().'</td>';
        echo '<td id="subtituloTabla">'.$objPersona->getApellido().'</td>';
        echo '<td id="subtituloTabla">'.$objPersona->getFechaNac().'</td>';
        echo '<td id="subtituloTabla">'.$objPersona->getTelefono().'</td>';
        echo '<td id="subtituloTabla">'.$objPersona->getDomicilio().'</td>'; 
        echo '<td id="subtituloTabla"><a class="linkVolver" href="autosPersona.php?NroDni='.$objPersona->getNroDni().'">Mas</a></td></tr>';
	  }
    echo '</table>';
    echo '<br>';
  }
  else{
    echo '<br>';
  echo '<span class="titulo2">No hay personas cargadas</span><br>';
  }

?>
<a class="linkVolver" href="../index.php">Menu</a><br>
</div>
</body>
</html>