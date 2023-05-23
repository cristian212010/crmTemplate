<?php
if (isset($_POST['guardar'])) {
    require_once("config.php");

    $config = new Config();

    $config-> setNombres($_POST['nombres']);
    $config-> setDireccion($_POST['direccion']);
    $config-> setLogros($_POST['logros']);

    $config-> insertData();

    echo "<script>alert('Los datos fueron guardados satisfactoriamente');document.location='estudiantes.php'</script>";
}
?>