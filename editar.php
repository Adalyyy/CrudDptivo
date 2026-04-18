<?php 
include 'header.php';
include 'app/controller/crud.php'; 

//Aqui ya viene en POST
$id=$_POST['id'];
$nombre=$_POST['nombreCompleto'];
$departamento=$_POST['departamento'];
$crud= new Crud();

if($crud->editar($id,$nombre,$departamento)){
    header("location: mostrar.php?mensaje=success");
}else{
     header("location: mostrar.php?mensaje=fail");
}
?>
