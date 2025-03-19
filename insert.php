<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion']) && $_POST['accion'] == 'insertar') {
    
    $nombre = $_POST['nombre'];  
    $edad = $_POST['edad'];
    $estadia = $_POST['estadia'];
    $especie = $_POST['especie'];
    $color = $_POST['color'];
    $raza = $_POST['raza'];

    
    $sql = "INSERT INTO mascotas_adp (nombre, edad, estadia, especie, color, raza) VALUES ('$nombre', '$edad', '$estadia', '$especie', '$color', '$raza')";

    if ($conn->query($sql) === TRUE) {
        
        $mensaje = "Mascota insertada correctamente";
    } else {
       
        $mensaje = "Error: " . $conn->error;
    }

    
    echo "<script type='text/javascript'>
            alert('$mensaje');
            window.location.href = 'index.php'; // Redirigir a la página principal
          </script>";
}
?>
