<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar caja de cirugía <?= $cajaMovimiento['id'] ?></title>
</head>

<body>
    <h1>Editar caja de cirugía <?= $cajaMovimiento['id'] ?></h1>

    <form method="post" action="<?= site_url('caja/update/' . $cajaMovimiento['id']) ?>">
        <div class="form-group">
            <label for="caja_id">Caja:</label>
            <input type="text" name="caja_id" id="caja_id" class="form-control" required value="<?=  $cajaMovimiento['caja_id'] ;?>">
        </div>
        <div class="form-group">
            <label for="fecha_entrada">Fecha de Entrada:</label>
            <input type="text" name="fecha_entrada" id="fecha_entrada" class="form-control" required value="<?=  $cajaMovimiento['fecha_entrada'] ;?>">
        </div>
        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="text" name="fecha_salida" id="fecha_salida" class="form-control" required value="<?=  $cajaMovimiento['fecha_salida'] ;?>">
        </div>
        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <input type="text" name="paciente" id="paciente" class="form-control" required value="<?=  $cajaMovimiento['paciente'] ;?>">
        </div>
        <div class="form-group">
            <label for="medico">Medico:</label>
            <input type="text" name="medico" id="medico" class="form-control" required value="<?=  $cajaMovimiento['medico'] ;?>">
        </div>
        <div class="form-group">
            <label for="servicio">Servicio:</label>
            <input type="text" name="servicio" id="servicio" class="form-control" required value="<?=  $cajaMovimiento['servicio'] ;?>">
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>

    <a href="<?= site_url('caja') ?>" class="btn btn-link">Volver a la lista</a>
</body>

</html>