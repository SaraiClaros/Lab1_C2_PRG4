<?php include 'db.php'; ?>
<?php include 'header.php'; ?>

<h2 style="text-align: center;">Lista de Rescatados</h2>

<table class="styled-table" style="color: black; ">
    <tr style="background-color: rgb(106, 171, 193);">
        <td>ID</td>
        <td>Nombre</td>
        <td>Edad</td>
        <td>Tiempo de Estadia</td>
        <td>Especie</td>
        <td>Color</td>
        <td>Raza</td>
    </tr>
    
    <?php
    $result = $conn->query("SELECT * FROM mascotas_adp");
    if ($result->num_rows > 0):
        while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td>
                    <label for="Nombre_<?= $row['ID'] ?>"><?= $row['Nombre'] ?></label>
                </td>
                <td>
                    <label for="Edad_<?= $row['ID'] ?>"><?= $row['Edad'] ?></label>
                </td>
                <td>
                    <label for="Estadia_<?= $row['ID'] ?>"><?= $row['Estadia'] ?></label>
                </td>
                <td>
                    <label for="Especie_<?= $row['ID'] ?>"><?= $row['Especie'] ?></label>
                </td>
                <td>
                    <label for="Color_<?= $row['ID'] ?>"><?= $row['Color'] ?></label>
                </td>
                <td>
                    <label for="Raza_<?= $row['ID'] ?>"><?= $row['Raza'] ?></label>
                </td>
                
            </tr>
        <?php endwhile; 
    else: ?>
        <tr>
            <td colspan="8">No hay registros disponibles.</td>
        </tr>
    <?php endif; ?>
</table>

<?php include 'footer.php'; ?>
