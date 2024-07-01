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
    <div class="mt-5 clearfix"></div>

    <h3>Cajas de cirugía</h3>
    <div class="container-fluid text-right pe-3 pb-3 ">
        <a href="<?= base_url('caja/create') ?>" class="btn btn-success">
            <i class="fas fa-plus"></i>
            Agregar Caja
        </a>
    </div>

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
                    <td>
                        <?php
                        switch ($caja['estado']) {
                            case 'disponible':
                                echo "<i class='fas fa-circle text-success '></i>";
                                break;
                            case 'ocupada':
                                echo "<i class='fas fa-circle text-warning '></i>";
                                break;
                            default:
                                echo "<i class='fas fa-circle text-danger'></i>";
                                break;
                        }
                        ?>
                        <b style="font-size: smaller;" ><?= strtoupper($caja['estado']);?></b>
                    </td>
                    <td><?= $caja['contenido'] ?></td>
                    <td><?= $caja['fecha_retiro'] ?></td>
                    <td><?= $caja['momento_retiro'] ?></td>
                    <td>
                        <a href="<?= base_url('caja/show/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-eye text-primary "></i></a>
                        <a href="<?= base_url('caja/edit/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-pen text-info "></i></a>
                        <a href="<?= base_url('caja/delete/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-trash text-danger "></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php echo  $this->endSection(); ?>