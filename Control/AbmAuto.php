<?php
class AbmAuto{
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Tabla
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('Patente',$param) && array_key_exists('Marca',$param) 
        && array_key_exists('Modelo',$param) && array_key_exists('DniDuenio',$param)){
            $obj = new Auto();
            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio']);
        }
        return $obj;
    }

       
    private function cargarObjeto2($param){
        $obj = null;
        if( array_key_exists('Patente',$param) && array_key_exists('DniDuenio',$param)){
            $obj = new Auto();
            $obj->setear2($param['Patente'], $param['DniDuenio']);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Tabla
     */
    public function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['Patente']) ){
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
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
        if (isset($param['Patente'])) {
            $resp = true;
        }
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        //$param['Patente'] =null;
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
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjAuto = $this->cargarObjeto($param);
            //print_r($elObjAuto); Auto Object ( [patente:Auto:private] => XXXX [marca:Auto:private] => [modelo:Auto:private] => [dniDuenio:Auto:private] => XXXX [mensajeoperacion:Auto:private] => )

            if($elObjAuto!=null && $elObjAuto->modificar()){
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
    public function buscar($param){ //Si ingresa con $param NULL es para que muestre todos los autos
        $where = " true ";
        
        if ($param<>NULL){
            if  (isset($param['Patente'])) {
                $where.=" and Patente ='".$param['Patente']."'";
            }
            if  (isset($param['Marca'])) {
                $where.=" and Marca ='".$param['Marca']."'";
            }
            if  (isset($param['Modelo'])) {
                $where.=" and Modelo ='".$param['Modelo']."'";
            }
            if  (isset($param['DniDuenio']))
                 $where.=" and DniDuenio ='".$param['DniDuenio']."'";
        }
        
        $arreglo = Auto::listar($where);
        return $arreglo;
    }


      /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacionDuenio($param){
        //print_r($param); //Array ( [Patente] => XXX [DniDuenio] => XXX )
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto2($param);
            //print_r($elObjtTabla);
            if($elObjtTabla!=null && $elObjtTabla->modificarDuenio()){
                $resp = true;
            }
        }
        return $resp;
    }
    
}
?>