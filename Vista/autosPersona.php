<?php
include_once '../configuracion.php';
$objAbmPersona = new AbmPersona();
$datos = data_submitted(); //Devuelve un array = Array([NroDni] => X)
//verEstructura($datos);

$objPersona =NULL;
if (isset($datos['NroDni'])){ //Si existe un objeto con NroDni, obtengo el objeto Persona con todos sus datos
    $listaPersona = $objAbmPersona->buscar($datos);
    //verEstructura($listaTabla);
    if (count($listaPersona)==1){
        $objPersona= $listaPersona[0];
    }
}

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

 
<?php if ($objPersona!=null){
          echo '<span class="titulo2">Información de la persona</span><br>';
          echo '<table class="table table-bordered">';
            echo '<tr><td id="tituloTabla">'."NRO DNI".'</td>';
            echo '<td id="tituloTabla">'."NOMBRE".'</td>';
            echo '<td id="tituloTabla">'."APELLIDO".'</td>';
            echo '<td id="tituloTabla">'."FECHA NACIMIENTO".'</td>';
            echo '<td id="tituloTabla">'."TELEFONO".'</td>';
            echo '<td id="tituloTabla">'."DOMICILIO".'</td>';

            echo '<tr><td id="subtituloTabla">'.$objPersona->getNroDni().'</td>';
            echo '<td id="subtituloTabla">'.$objPersona->getNombre().'</td>';
            echo '<td id="subtituloTabla">'.$objPersona->getApellido().'</td>';
            echo '<td id="subtituloTabla">'.$objPersona->getFechaNac().'</td>';
            echo '<td id="subtituloTabla">'.$objPersona->getTelefono().'</td>';
            echo '<td id="subtituloTabla">'.$objPersona->getDomicilio().'</td></tr>';
          echo '</table>';
          echo '<br>';
      
 
          $arrayAuto = ["DniDuenio" => $objPersona->getNroDni()];
          $objAbmAuto = new AbmAuto();
          $auto = $objAbmAuto->buscar($arrayAuto);
       
          if ($auto!=null){
            echo '<span class="titulo2">Autos de la persona</span><br>';
            echo '<table class="table table-bordered">';
             echo '<tr><td id="tituloTabla">'."PATENTE".'</td>';
             echo '<td id="tituloTabla">'."MARCA".'</td>';
             echo '<td id="tituloTabla">'."MODELO".'</td></tr>';

              foreach ($auto as $objAuto) {
                echo '<td id="subtituloTabla">'.$objAuto->getPatente().'</td>';
                echo '<td id="subtituloTabla">'.$objAuto->getMarca().'</td>';
                echo '<td id="subtituloTabla">'.$objAuto->getModelo().'</td></tr>';
              }
            echo '</table>';
            echo '<br>'; 
          }
          else{
              echo '<span class="titulo2">No tiene autos cargados</span><br>';
          }
      }
?>

<a class="linkVolver" href="listaPersonas.php">Menu</a><br>
</div>
</body>
</html>