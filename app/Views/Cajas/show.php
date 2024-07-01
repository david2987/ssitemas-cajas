<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja de cirugía <?= $caja['id'] ?></title>
</head>

<body>
    <h1>Caja de cirugía <?= $caja['id'] ?></h1>

    <div class="card">
        <div class="card-body">
            <p><b>Descripción:</b> <?= $caja['descripcion'] ?></p>
            <p><b>Estado:</b> <?= $caja['estado']?></p>
            <p><b>Contenido:</b> <?= $caja['contenido'] ?></p>
            <p><b>Fecha retiro:</b> <?= $caja['fecha_retiro'] ?></p>
            <p><b>Momento retiro:</b> <?= $caja['momento_retiro'] ?></p>
        </div>
    </div>

    <a href="<?= base_url('caja') ?>" class="btn btn-link">Volver a la lista</a>
</body>

</html>