<?php
class AbmPersona{
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Tabla
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('NroDni',$param) && array_key_exists('Apellido',$param) 
        && array_key_exists('Nombre',$param) && array_key_exists('fechaNac',$param)
        && array_key_exists('Telefono',$param) && array_key_exists('Domicilio',$param)){

            $obj = new Persona();
            $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Tabla
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['NroDni']) ){
            $obj = new Persona();
            $obj->setear($param['NroDni'], null, null, null, null, null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        //$param['NroDni'] =null;
        $elObjtTabla = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($elObjtTabla!=null && $elObjtTabla->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null && $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null && $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = "";
        $and = ' and ';
        if ($param<>NULL){
            if (isset($param['NroDni']))
            $dni= $param['NroDni'];
            $where.="NroDni = '$dni'";
            }
            if  (isset($param['Apellido'])) {
                if ($where != "") {
                    $where.=$and;
                    $where.="Apellido = '".$param['Apellido']."'";
                } else {
                    $where.="Apellido = '".$param['Apellido']."'";
                }
            }
            if  (isset($param['Nombre'])) {
                if ($where != "") {
                    $where.=$and;
                    $where.="Nombre = '".$param['Nombre']."'";
                } else {
                    $where.="Nombre = '".$param['Nombre']."'";
                }
            }
            if  (isset($param['fechaNac'])) {
                if ($where != "") {
                    $where.=$and;
                    $where.="fechaNac = '".$param['fechaNac']."'";
                } else {
                    $where.="fechaNac = '".$param['fechaNac']."'";
                }
            }
            if  (isset($param['Telefono'])) {
                if ($where != "") {
                    $where.=$and;
                    $where.="Telefono = '".$param['Telefono']."'";
                } else {
                    $where.="Telefono = '".$param['Telefono']."'";
                }
            }
            if  (isset($param['Domicilio'])) {
                if ($where != "") {
                    $where.=$and;
                    $where.="Domicilio = '".$param['Domicilio']."'";
                } else {
                    $where.="Domicilio = '".$param['Domicilio']."'";
                }
            }
        //echo $where;
        $arreglo = Persona::listar($where);
        return $arreglo;
    }
 
}
?>