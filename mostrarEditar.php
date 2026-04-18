<?php 
include 'header.php';
include 'app/controller/crud.php'; 

$id=$_GET['id'];
$crud = new Crud ();
$dato = $crud->mostrarUpdate($id);
//echo $dato;
//var_dump($dato);
?>


<div class="container mt-5" style="max-width: 800px;">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="glass main-card text-center p-4 shadow">
                <form action="editar.php" method="POST">
                    <h4 class="text-white">Editar</h4>
                    <div class="mb-3 text-start">

                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <label class="form-label text-white">Nombre completo:</label>
                        <input 
                            class="form-control glass-input" 
                            type="text" 
                            name="nombreCompleto" 
                            value="<?php echo $dato['nombre_completo']; ?>" 
                            placeholder="Ingrese su nombre completo" 
                            required>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label text-white">Departamento actual:</label>
                        <h5 class="text-white"><?php echo $dato['persona_visitada']; ?></h5>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label text-white">Cambiar departamento (opcional):</label>

                        <select class="form-control glass-input" name="departamento">
                            <option value="<?php echo $dato['persona_visitada']; ?>"> No cambiar</option>
                            <option value="pista">Pista de atletismo</option>
                            <option value="gym">Gimnasio</option>
                            <option value="registro">Trámite de registro</option>
                            <option value="baja">Trámite de baja</option>
                            <option value="competencia">Inscripciones a competencias</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                   
                    <div class="d-flex justify-content-between mt-4">
                        <a href="mostrar.php" class="btn btn-outline-danger">Cancelar</a>
                        <button class="btn btn-outline-success" >Actualizar</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>