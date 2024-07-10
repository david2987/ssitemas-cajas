<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Movimiento de Caja</title>
</head>

<body>
    
<?= $this->extend('layout_popup') ?>

<?= $this->section('contenido') ?>

    <h1>Agregar Movimiento de Caja</h1>

    <form method="post" action="<?= base_url('cajamovimiento/store') ?>">
        <div class="form-group">
            <label for="caja_id">Caja:</label>
            <input type="number" name="caja_id" value="<?= $caja; ?>"  id="caja_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_entrada">Fecha de Entrada:</label>
            <input type="date" name="fecha_entrada" id="fecha_entrada"   value="<?php echo date("Y-m-d");?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="date" name="fecha_salida" value="<?php echo date("Y-m-d",strtotime(date("d-m-Y")."+ 1 days"));?>" id="fecha_salida" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <input type="text" name="paciente" id="paciente" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="medico">Medico:</label>
            <input type="text" name="medico" id="medico" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="servicio">Servicio:</label>
            <input type="text" name="servicio" id="servicio" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="momento_retiro">Momento retiro:</label>
            <select name="momento_retiro" id="momento_retiro" class="form-control" required>
                <option value="1">Primer Mañana</option>
                <option value="2">Segunda Mañana</option>
                <option value="3">Tarde</option>
                <option value="4">Noche</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</body>

</html>

<?php echo  $this->endSection(); ?>