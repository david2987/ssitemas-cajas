<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja de cirugía <?= $caja['id'] ?></title>
</head>

<body>

    <div class="card">
        <div class="card-body">
            <p><b>Descripción:</b> <?= $caja['descripcion'] ?></p>
            <p><b>Estado:</b> <?= $caja['estado']?></p>
            <p><b>Contenido:</b> <?= $caja['contenido'] ?></p>
            <p><b>Fecha retiro:</b> <?= $caja['fecha_retiro'] ?></p>
            <p><b>Momento retiro:</b> <?= $caja['momento_retiro'] ?></p>
        </div>
    </div>
    
</body>

</html>