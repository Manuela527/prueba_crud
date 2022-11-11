<?php

require_once('modelo.php');

class empleado extends modelo{
    protected $id;
    protected $nombre;
    protected $email;
    protected $sexo;
    protected $area_id;    
    protected $descripción;

    public function __construct(){
        parent::__construct();
    }

    public function registro($id,$nombre,$email,$sexo,$area_id,$descripción)
   {
        $sql=`INSERT INTO empleados(id,nombre,email,sexo,area_id,descripción) VALUES ('".$id."','".$nombre."','".$email."','".$sexo."','".$area_id."','".$descripción."')`;
        $resultado=$this->_db->query($sql);
        if(!$resultado){
            echo"fallo el ingreso de datos";
        }else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
    public function eliminar($id){
        $sql=`DELETE FROM empleados where id= '".$id."'`;
        $elimina=$this->_db->query($sql);
        if(!$elimina){
            echo "fallo la eliminación de datos";
        }else{
            return $elimina;
            $elimina->close();
            $this->_db->close();
        }
    }

   




}

    
    


