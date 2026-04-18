<?php
    class Conexion {
        public function conectar(){
            return mysqli_connect(
                "localhost",
                "daly",
                "1234",
                "dptivo",
            );
        }
    }
    
?>