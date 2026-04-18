<?php 
include 'header.php';
include 'app/controller/crud.php'; 
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="glass p-4">
                <h4 class="text-white text-center mb-4">Registro</h4>

                <div class="text-end mt-3">
                    <a href="index.php" class="btn btn-outline-light">Volver</a>
                </div>

                <?php
                    /* Agregar */
                    if(isset($_GET['mensaje'])){
                        switch($_GET['mensaje']){
                            case 'Success':
                                echo "<script>alert('Registro guardado correctamente');</script>";
                                break;

                            case 'Fail':
                                echo "<script>alert('Error al guardar');</script>";
                                break;

                            case 'success':
                                echo "<script>alert('Registro actualizado correctamente');</script>";
                                break;

                            case 'fail':
                                echo "<script>alert('Error al actualizar');</script>";
                                break;

                            case 'eliminado':
                                echo "<script>alert('Registro eliminado correctamente');</script>";
                                break;

                            case 'error':
                                echo "<script>alert('Error al eliminar');</script>";
                                break;
                        }
                    }
                ?>

                <div class="table-responsive">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre completo</th>
                                <th>Departamento</th>
                                <th>Fecha</th>
                                <th>Hora de entrada</th>
                                <th>Hora de salida</th>
                                <th>Registro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <?php
                            $crud = new Crud ();
                            $datos=$crud->mostrar();
                            foreach ($datos as $dato): 
                                $id=$dato['id'];
                        ?>

                        <tbody>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $dato['nombre_completo']; ?></td>
                                <td><?php echo $dato['persona_visitada']; ?></td>
                                <td><?php echo $dato['fecha']; ?></td>
                                <td><?php echo $dato['hora_entrada']; ?></button></td>
                                <td><?php 
                                    if(!empty($dato['hora_salida'])){
                                        echo $dato['hora_salida'];
                                    }else{
                                      echo '<a href="salir.php?id='.$id.'" class="btn btn-danger btn-sm">Salir</a>';                                    
                                    };
                                    ?>         
                                </td> 
                                <td><?php echo $dato['created_at']; ?></td>
                                <td>
                                    <a href="eliminar.php?id='<?php echo $id;?>'" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Se eliminará el registro, deseas continuar?');">x</a>
                                    <a href="mostrarEditar.php?id='<?php echo $id;?>'" class="btn btn-outline-warning btn-sm">Editar</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                            endforeach;
                        ?>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>