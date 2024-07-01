<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviento de Caja <?= $cajaMovimiento['id'] ?></title>
</head>

<body>
    <h1>Caja de cirugía <?= $cajaMovimiento['id'] ?></h1>

    <div class="card">
        <div class="card-body">
            <p><b>id</b> <?= $cajaMovimiento['id'] ?></p>
            <p><b>Caja</b> <?= $cajaMovimiento['caja_id'] ?></p>
            <p><b>Fecha de Salida</b> <?= $cajaMovimiento['fecha_entrada'] ?></p>
            <p><b>Fecha de Entrada</b> <?= $cajaMovimiento['fecha_salida'] ?></p>
            <p><b>Paciente</b> <?= $cajaMovimiento['paciente'] ?></p>
            <p><b>Medico</b> <?= $cajaMovimiento['medico'] ?></p>
            <p><b>Servicio</b> <?= $cajaMovimiento['servicio'] ?></p>
        </div>
    </div>

    <a href="<?= base_url('cajamovimiento') ?>" class="btn btn-link">Volver a la lista</a>
</body>

</html>