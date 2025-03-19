<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion']) && $_POST['accion'] == 'eliminar') {
    $id = $_POST['id'];  
    
    $sql = "DELETE FROM mascotas_adp WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $mensaje = "Mascota eliminada correctamente";
    } else {
        $mensaje = "Error: " . $conn->error;
    }

    
    echo "<script type='text/javascript'>
            alert('$mensaje');
            window.location.href = 'index.php'; // Redirigir a la página principal
          </script>";
}
?>
