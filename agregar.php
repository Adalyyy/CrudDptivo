<?php 

include 'header.php'; 
include 'app/controller/crud.php';

$nombre=$_POST['nombreCompleto'];
$departamento=$_POST['departamento'];
$crud= new Crud();

    if ($crud->guardar($nombre,$departamento)){
    header("location: mostrar.php?mensaje=Success");
    } else {
        header("location: mostrar.php?mensaje=Fail");
    }
 
?>

