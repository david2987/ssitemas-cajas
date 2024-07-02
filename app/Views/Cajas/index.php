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

    <!-- Modal Agregar -->
    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalAgregarLabel">Agregar Cajas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <iframe src="<?= base_url('caja/create') ?>" style="width: 100%;" ></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>                   
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Modal Editar -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditarLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="<?= base_url('caja/edit/1') ?>" style="width: 100%;" ></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>                   
                </div>
            </div>
        </div>
    </div>


     <!-- Modal Mostrar -->
     <div class="modal fade" id="modalMostrar" tabindex="-1" aria-labelledby="modalMostrarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalMostrarLabel">Caja</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="<?= base_url('caja/show/1') ?>" style="width: 100%;" ></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>                   
                </div>
            </div>
        </div>
    </div>


    <h3>Cajas de cirugía</h3>
    <br>
    <div class="container-fluid text-right pe-3 pb-3">
        <div class="row">
            <div class="col-6 text-left">
                <label for="descripcion">Descripcion</label>
                <input type="text">
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <option value="PENDIENTE">PENDIENTE</option>
                    <option value="DISPONIBLE">DISPONIBLE</option>
                    <option value="EN TRANSITO">EN TRANSITO</option>
                </select>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                    <i class="fas fa-plus"></i>
                    Agregar Caja
                </button>
            </div>
        </div>
    </div>


    <table class="table table-striped">
        <thead class="fondoHeaderTabla">
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Contenido</th>                                
                <th></th>                                              
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
                        <b style="font-size: smaller;"><?= strtoupper($caja['estado']); ?></b>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-light">                            
                            <i class="fas fa-box-open"></i>
                        </button>
                        <!-- <?php // $caja['contenido'] 
                                ?> -->

                    </td>                                      
                    <td>
                        <a href="<?= base_url('cajamovimiento/show/' . $caja['id']) ?>" class="btn btn-light"> <i class="fas fa-inbox"></i></a>
                        <a href="<?= base_url('caja/show/' . $caja['id']) ?>" data-bs-toggle="modal" data-bs-target="#modalMostrar"  class="btn btn-light"><i class="fas fa-eye text-primary "></i></a>
                        <a href="<?= base_url('caja/edit/' . $caja['id']) ?>"  data-bs-toggle="modal" data-bs-target="#modalEditar" class="btn btn-light"><i class="fas fa-pen text-info "></i></a>
                        <a href="<?= base_url('caja/delete/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-trash text-danger "></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="container-fluid text-center">

        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link">
                        << </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">>></a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>

<?php echo  $this->endSection(); ?>