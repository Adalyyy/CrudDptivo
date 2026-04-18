<?php include 'header.php'; ?>

<body>

<div class="container mt-5" style="max-width: 800px;">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="glass main-card text-center p-4 shadow">
                <form action="agregar.php" method="POST">
                    <h4 class="text-white">Registro</h4>
                    <div class="mb-3 text-start">
                        <label class="form-label text-white">Nombre completo:</label>
                        <input 
                            class="form-control glass-input" 
                            type="text" 
                            name="nombreCompleto" 
                            placeholder="Ingrese su nombre completo" 
                            required>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label text-white">Departamento visitado:</label>
                        <select class="form-control glass-input" name="departamento" required>
                            <option value="">Seleccione una opción</option>
                            <option value="pista">Pista de atletismo</option>
                            <option value="gym">Gimnasio</option>
                            <option value="registro">Trámite de registro</option>
                            <option value="baja">Trámite de baja</option>
                            <option value="competencia">Inscripciones a competencias</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                   
                    <div class="d-flex justify-content-between mt-4">
                        <button class="btn btn-outline-danger" type="reset">Borrar</button>
                        <button class="btn btn-outline-warning">Registrar</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

</body>
</html>