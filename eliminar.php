<?php 
include 'header.php';
include 'app/controller/crud.php'; 

$id=$_GET['id'];
$crud= new Crud();
if($crud->eliminar($id)){
    header("Location: mostrar.php?mensaje=eliminado");
}else{
    header("Location: mostrar.php?mensaje=error");
}
?>
