<?php
    require_once('config/configdb.php');

    class MAdmin{
        public $mensaje;
        private $conexion;

        public function __construct(){

            $this->conexion= new mysqli(SERVIDOR,USUARIO,PASSWORD,BBDD);
            $this->conexion->set_charset('utf8');
        }

        public function alta_admin($nombre,$correo,$pw){
            $sql= 'INSERT INTO usuarios (nombre, correo, password, perfil) VALUES ("'.$nombre.'","'.$correo.'","'.$pw.'","A");';

            $resultado=$this->conexion->query($sql);
            if($resultado){
                $this->mensaje="Nuevo administrador añadido";
            }else{
                $this->mensaje="No se ha podido dar de alta el administrador";
            }

            return $this->mensaje;
        }

         public function iniciar_sesion($correo){
            $sql="SELECT * FROM usuarios WHERE correo='$correo'";

            $resultado=$this->conexion->query($sql);
            if($resultado->num_rows > 0){
                $usuario = $resultado->fetch_assoc();
                return $usuario;
            }else{
                $this->mensaje="Fallo al enviar formulario";
            }

            return $this->mensaje;
        }
    }
?>