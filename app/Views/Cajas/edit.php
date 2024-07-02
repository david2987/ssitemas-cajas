<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar caja de cirugía <?= $caja['id'] ?></title>
</head>

<body>

    <?= $this->extend('layout_popup') ?>

    <?= $this->section('contenido') ?>
 
    <form method="post" action="<?= base_url('caja/update/' . $caja['id']) ?>">
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?= $caja['descripcion'] ?>" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="PENDIENTE" <?php if ($caja['estado'] == 'PENDIENTE') echo 'selected'; ?>>PENDIENTE</option>
                <option value="DISPONIBLE" <?php if ($caja['estado'] == 'DISPONIBLE') echo 'selected'; ?>>DISPONIBLE</option>
                <option value="EN TRANSITO" <?php if ($caja['estado'] == 'EN TRANSITO') echo 'selected'; ?>>EN TRANSITO</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <input type="text" name="contenido" id="contenido" class="form-control" value="<?= $caja['contenido'] ?>" required>
        </div>
        <div class="form-group">
            <label for="fecha_retiro">Fecha retiro:</label>
            <input type="date" name="fecha_retiro" id="fecha_retiro" class="form-control" value="<?= $caja['fecha_retiro'] ?>" required>
        </div>
        <div class="form-group">
            <label for="momento_retiro">Momento retiro:</label>
            <select name="momento_retiro" id="momento_retiro" class="form-control" required>
                <option value="Primer Mañana" <?php if ($caja['momento_retiro'] == 'Primer Mañana') echo 'selected'; ?>>Primer Mañana</option>
                <option value="Segunda Mañana" <?php if ($caja['momento_retiro'] == 'Segunda Mañana') echo 'selected'; ?>>Segunda Mañana</option>
                <option value="Tarde" <?php if ($caja['momento_retiro'] == 'Tarde') echo 'selected'; ?>>Tarde</option>
                <option value="Noche" <?php if ($caja['momento_retiro'] == 'Noche') echo 'selected'; ?>>Noche</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>

</body>

</html>


<?php echo  $this->endSection(); ?>