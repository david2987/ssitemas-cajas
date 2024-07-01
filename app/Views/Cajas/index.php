<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajas de cirugía</title>
</head>

<body>
    
    <?= $this->extend('layout') ?>
    
    <?= $this->section('contenido') ?>
    <h1>Cajas de cirugía</h1>
    
    <a href="<?= base_url('caja/create') ?>" class="btn btn-primary">Crear caja</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Contenido</th>
                <th>Fecha retiro</th>
                <th>Momento retiro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cajas as $caja) : ?>

                <tr>
                    <td><?= $caja['id'] ?></td>
                    <td><?= $caja['descripcion'] ?></td>
                    <td><?= $caja['estado'] ?></td>
                    <td><?= $caja['contenido'] ?></td>
                    <td><?= $caja['fecha_retiro'] ?></td>
                    <td><?= $caja['momento_retiro'] ?></td>
                    <td>
                        <a href="<?= base_url('caja/show/' . $caja['id']) ?>" class="btn btn-info">Ver</a>
                        <a href="<?= base_url('caja/edit/' . $caja['id']) ?>" class="btn btn-warning">Editar</a>
                        <a href="<?= base_url('caja/delete/' . $caja['id']) ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php echo  $this->endSection(); ?>