<?php
include 'app/controller/crud.php';

$id = $_GET['id'];
$crud = new Crud();

if($crud->salir($id)){
    header("Location: mostrar.php");
} else {
    echo "Error al registrar salida";
}
?>