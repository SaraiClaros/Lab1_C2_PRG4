<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion']) && $_POST['accion'] == 'actualizar') {
    
    $id = $_POST['id'];  
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $estadia = $_POST['estadia'];
    $especie = $_POST['especie'];
    $color = $_POST['color'];
    $raza = $_POST['raza'];

    
    $sql = "UPDATE mascotas_adp SET nombre='$nombre', edad='$edad', estadia='$estadia', especie='$especie', color='$color', raza='$raza' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $mensaje = "Mascota actualizada correctamente";
    } else {
        $mensaje = "Error: " . $conn->error;
    }

    
    echo "<script type='text/javascript'>
            alert('$mensaje');
            window.location.href = 'index.php'; // Redirigir a la página principal
          </script>";
}
?>
