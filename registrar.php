<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['insertar'])) {
        
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $estadia = $_POST['estadia'];
        $especie = $_POST['especie'];
        $color = $_POST['color'];
        $raza = $_POST['raza'];

        $conn->query("INSERT INTO mascotas_adp (nombre, edad, estadia, especie, color, raza) 
                      VALUES ('$nombre', '$edad', '$estadia', '$especie', '$color', '$raza')");
        header('Location: index.php');
        exit();
    }

    if (isset($_POST['actualizar'])) {
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $estadia = $_POST['estadia'];
        $especie = $_POST['especie'];
        $color = $_POST['color'];
        $raza = $_POST['raza'];

        $conn->query("UPDATE mascotas_adp SET nombre='$nombre', edad='$edad', estadia='$estadia', 
                      especie='$especie', color='$color', raza='$raza' WHERE id=$id");
        header('Location: index.php');
        exit();
    }

    if (isset($_POST['eliminar'])) {
        
        $id = $_POST['id'];
        $conn->query("DELETE FROM mascotas_adp WHERE id=$id");
        header('Location: index.php');
        exit();
    }
}


$id = $_GET['id'] ?? null; 
$mascota = null;

if ($id) {
    $result = $conn->query("SELECT * FROM mascotas_adp WHERE id = $id");
    if ($result->num_rows > 0) {
        $mascota = $result->fetch_assoc();
    }
}


var_dump($mascota);  

?>

<?php include 'header.php'; ?>

<h2 style="text-align: center;">Insertar / Editar / Eliminar Mascota</h2>

<form method="post" style="max-width: 600px; margin: 0 auto; background-color: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
    <?php if ($mascota): ?>
        <input type="hidden" name="id" value="<?= $mascota['id'] ?>">
    <?php endif; ?>
    
    <div style="margin-bottom: 10px;">
        <label for="nombre" style="font-size: 1.2em; display: block;">Nombre:</label>
        <input type="text" name="nombre" value="<?= $mascota['nombre'] ?? '' ?>" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="edad" style="font-size: 1.2em; display: block;">Edad:</label>
        <input type="number" name="edad" value="<?= $mascota['edad'] ?? '' ?>" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="estadia" style="font-size: 1.2em; display: block;">Tiempo de Estadia:</label>
        <input type="number" name="estadia" value="<?= $mascota['estadia'] ?? '' ?>" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="especie" style="font-size: 1.2em; display: block;">Especie:</label>
        <input type="text" name="especie" value="<?= $mascota['especie'] ?? '' ?>" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="color" style="font-size: 1.2em; display: block;">Color:</label>
        <input type="text" name="color" value="<?= $mascota['color'] ?? '' ?>" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 20px;">
        <label for="raza" style="font-size: 1.2em; display: block;">Raza:</label>
        <input type="text" name="raza" value="<?= $mascota['raza'] ?? '' ?>" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <form method="POST">
    
    <div style="display: flex; justify-content: space-between; gap: 10px;">

       
        <?php if (!$mascota): ?>
            <button type="submit" name="accion" value="insertar" style="background-color:rgb(16, 15, 99); color: white; padding: 15px 20px; font-size: 1.1em; border: none; border-radius: 5px; cursor: pointer; width: 30%;"
                formaction="insert.php">
                Insertar Mascota
            </button>
        <?php endif; ?>

      
        <?php if (!$mascota): ?>
            <button type="submit" name="accion" value="actualizar" style="background-color:rgb(22, 10, 128); color: white; padding: 15px 20px; font-size: 1.1em; border: none; border-radius: 5px; cursor: pointer; width: 30%;"
                formaction="update.php">
                Actualizar Mascota
            </button>
        <?php endif; ?>

       
        <?php if (!$mascota): ?>
            <button type="submit" name="accion" value="eliminar" style="background-color:rgb(10, 16, 104); color: white; padding: 15px 20px; font-size: 1.1em; border: none; border-radius: 5px; cursor: pointer; width: 30%; margin-top: 10px;"
                formaction="delete.php">
                Eliminar Mascota
            </button>
        <?php endif; ?>

    </div>
</form>


<?php include 'footer.php'; ?>

