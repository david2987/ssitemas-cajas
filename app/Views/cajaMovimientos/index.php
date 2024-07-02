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

  
    <div class="container-fluid text-right pe-3 pb-3">
        <div class="row">
            <div class="col-6 text-left">
                <label for="descripcion">Descripcion</label>
                <input type="text">               
            </div>
            <div class="col-6">
                <a href="<?=  base_url('cajamovimiento/create') ?>" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    Agregar Movimiento
                </a>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead class="fondoHeaderTabla" >
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
                        
                        <a href="<?= base_url('cajamovimiento/show/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-eye text-primary "></i></a>
                        <a href="<?= base_url('cajamovimiento/edit/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-pen text-info "></i></a>
                        <a href="<?= base_url('cajamovimiento/delete/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-trash text-danger "></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php echo  $this->endSection(); ?>