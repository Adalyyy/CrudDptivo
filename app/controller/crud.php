<?php
//include "../config/bd.php";
include(__DIR__ . "/../config/bd.php");

    class Crud extends Conexion{

        public function guardar ($nombre,$departamento){
            $conexion =parent::conectar();
            $sql ="INSERT INTO visitas                              
                    (nombre_completo,persona_visitada) VALUES ('$nombre','$departamento')";
            $respuesta=mysqli_query($conexion,$sql);  
            return $respuesta;      
        }

        public function mostrar(){
            $conexion =parent::conectar();
            $sql="SELECT*FROM visitas";
            $respuesta=mysqli_query($conexion,$sql);
            return mysqli_fetch_all(
                $respuesta,
                MYSQLI_ASSOC
            );
        }

        public function eliminar ($id){
            $conexion =parent::conectar();
            $sql="DELETE FROM visitas WHERE id=$id ";
            $respuesta=mysqli_query($conexion,$sql);
            return $respuesta;
        }

        public function editar ($id, $nombre, $departamento){
            $conexion =parent::conectar();
            $sql="UPDATE visitas SET nombre_completo='$nombre', persona_visitada='$departamento' WHERE id=$id";
            $respuesta=mysqli_query($conexion,$sql);
            return $respuesta;
        }

        public function mostrarUpdate($id){
            $conexion =parent::conectar();
            $sql="SELECT  nombre_completo, persona_visitada FROM visitas WHERE id=$id";
            $respuesta=mysqli_query($conexion,$sql);
            return mysqli_fetch_assoc(
                $respuesta,
            );
        }

        public function salir($id){
            $conexion =parent::conectar();
            $sql= " UPDATE visitas 
            SET hora_salida = CURRENT_TIMESTAMP() 
            WHERE id = $id";
            $respuesta=mysqli_query($conexion,$sql);
            return $respuesta;
        }
        

    


    }
?>    
        
