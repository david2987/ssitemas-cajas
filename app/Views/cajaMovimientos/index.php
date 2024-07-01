<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos de Caja</title>
</head>

<body>
    <?= $this->extend('layout') ?>

    <?= $this->section('contenido') ?>

    <h1>Movimientos de Caja</h1>

    <a href="<?= base_url('cajamovimiento/create') ?>" class="btn btn-primary">Agregar Movimiento</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Caja</th>
                <th>Fecha de Entrada</th>
                <th>Fecha de Salida</th>
                <th>Paciente</th>
                <th>Medico</th>
                <th>Servicio</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cajaMovimientos as $caja) : ?>

                <tr>
                    <td><?= $caja['id'] ?></td>
                    <td><?= $caja['caja_id'] ?></td>
                    <td><?= $caja['fecha_entrada'] ?></td>
                    <td><?= $caja['fecha_salida'] ?></td>
                    <td><?= $caja['paciente'] ?></td>
                    <td><?= $caja['medico'] ?></td>
                    <td><?= $caja['servicio'] ?></td>
                    <td>
                        <a href="<?= base_url('cajamovimiento/show/' . $caja['id']) ?>" class="btn btn-info">Ver</a>
                        <a href="<?= base_url('cajamovimiento/edit/' . $caja['id']) ?>" class="btn btn-warning">Editar</a>
                        <a href="<?= base_url('cajamovimiento/delete/' . $caja['id']) ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php echo  $this->endSection(); ?>