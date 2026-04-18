<?php
include 'header.php';
?>
<!-- Incluir los archivos de Alertify.js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- formulario.php -->
<?php include 'header.php'; ?>

                <?php
                if (isset($_GET['mensaje'])) {
                    echo "<script> alertify.alert('Mensaje', '" . $_GET['mensaje'] . "');</script>";
                }
                ?>

                