<?php 
class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;
    private $mensajeoperacion;
    static $mensajeEstatico;
    
   
    public function __construct(){
        
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->dniDuenio="";
    }

    public function setear($patente, $marca, $modelo, $dniDuenio)    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
    }

     public function setear2($patente, $dniDuenio)    {
        $this->setPatente($patente);
        $this->setDniDuenio($dniDuenio);
    }
    
    
    
    public function getPatente(){
        return $this->patente;
        
    }
    public function setPatente($valor){
        $this->patente = $valor;
        
    }
    
    public function getMarca(){
        return $this->marca;
        
    }
    public function setMarca($valor){
        $this->marca = $valor;
        
    }

    public function getModelo(){
        return $this->modelo;
        
    }
    public function setModelo($valor){
        $this->modelo = $valor;
        
    }

    public function getDniDuenio(){
        return $this->dniDuenio;
        
    }
    public function setDniDuenio($valor){
        $this->dniDuenio = $valor;
    }
    

     public function getmensajeoperacion(){
        return $this->mensajeoperacion;
        
    }
    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
        
    }
    public static function getmensajeEstatico(){
        return Auto::$mensajeEstatico;
        
    }
    public static function setmensajeEstatico($valor){
        Auto::$mensajeEstatico = $valor;
        
    }
    

    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM auto WHERE Patente = ".$this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $resp;
    
        
    }
    

    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)  VALUES('".$this->getPatente()."', '".$this->getMarca()."', '".$this->getModelo()."', '".$this->getDniDuenio()."');";
        if ($base->Iniciar()) {
            try {
                if ($elid = $base->Ejecutar($sql)) {
                    $this->setPatente($elid);
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
                }
            } catch (\Throwable $th) {
                $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
            }

        } else {
            $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
        }
        return $resp;
    }
    

    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE auto SET Marca='".$this->getMarca()."', Modelo='".$this->getModelo()."', DniDuenio='".$this->getDniDuenio()."' WHERE Patente=".$this->getPatente();
        if ($base->Iniciar()) {
            try {
                if ($base->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
                }
            } catch (\Throwable $th) {
                $this->setmensajeoperacion("Tabla->modificar: ".$base->getError()); 
            }

        } else {
            $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
        return $resp;
    }


    public function modificarDuenio(){
        $resp = false;
        $base=new BaseDatos();
        $patente = "'".$this->getPatente()."'";
        $sql="UPDATE auto SET DniDuenio='".$this->getDniDuenio()."' WHERE Patente=".$patente;
        //echo $sql."<br/>";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
        return $resp;
    }
    

    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente=".$this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
        }
        return $resp;
    }
    

    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Auto();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            Auto::setmensajeEstatico("Tabla->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
    
}


?>