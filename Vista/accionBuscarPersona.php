<?php
include_once '../configuracion.php';
$objAbmPersona = new AbmPersona();
$datos = data_submitted(); //Devuelve un array = Array([NroDni] => X>>)
//verEstructura($datos);

$obj =NULL;
if (isset($datos['NroDni'])){ //Si existe un objeto con NroDni, obtengo el objeto Persona con todos sus datos
    $listaPersona = $objAbmPersona->buscar($datos);
    //verEstructura($listaTabla);
    if (count($listaPersona)==1){
        $obj= $listaPersona[0];
    }
}


?>	
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

<?php if ($obj!=null){?>
<form method="post" action="ActualizarDatosPersona.php">
    <span class="titulo2">Modificación de datos</span><br><br>
	
    <label>Número documento</label><br/>
    <div class="input-group mx-auto">
        <input type="text" readonly id="NroDni" name="NroDni" class="form-control" value="<?php echo $obj->getNroDni();?>">
    </div><br>
    
    <label>Apellido</label><br/>
    <div class="input-group mx-auto">
        <input type="text" id="Apellido" name="Apellido" maxlength="50" class="form-control" value="<?php echo $obj->getApellido();?>">
    </div><br>

    <label>Nombre</label><br/>
    <div class="input-group mx-auto">
        <input type="text" id="Nombre" name="Nombre" maxlength="50" class="form-control" value="<?php echo $obj->getNombre();?>">
    </div><br>

    <label>Fecha nacimiento</label><br/>
    <div class="input-group mx-auto">
    <input  id="fechaNac" name="fechaNac" class="form-control" value="<?php echo $obj->getFechaNac()?>">
    </div><br>

    <label>Telefono</label><br/>
    <div class="input-group mx-auto">
    <input  id="Telefono" name="Telefono" class="form-control" value="<?php echo $obj->getTelefono()?>">
    </div><br>


    <label>Domicilio</label><br/>
    <div class="input-group mx-auto">
    <input  id="Domicilio" name="Domicilio" class="form-control" value="<?php echo $obj->getDomicilio()?>">
    </div><br><br>

	<div class="form-group col-md-12">
        <button class="btn btn-responsive" type="submit" id="botonBuscar" title="Editar">Editar</button>
     </div>
</form>

<?php }else { ?>
    
        <span class="titulo2"><?php echo "NO EXISTE LA PERSONA CON EL DOCUMENTO INGRESADO"?></span><br>
<?php }?>

<a class="linkVolver" href="BuscarPersona.php">Volver</a><br>
</div>
</div>
</body>
</html>


<style type="text/css">
.input-group { 
  width: 33%;
}
</style>