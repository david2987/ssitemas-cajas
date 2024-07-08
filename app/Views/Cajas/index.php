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
    

    <script src="<?= JS.'cajas/cajas.js' ?>"></script>

    <!-- Modal Agregar -->
    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalAgregarLabel">Agregar Cajas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <?php include_once('create.php')  ?> 
                    </div>
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Modal Mostrar -->
    <div class="modal fade "  id="modalMostrar" tabindex="-1" aria-labelledby="modalMostrarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalMostrarLabel">Caja</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="<?= base_url('caja/show/1') ?>" style="width: 100%;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

      <!-- Modal Mostrar contenido caja -->
      <div class="modal fade " id="modalContenido" tabindex="-1" aria-labelledby="modalContenidoLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="min-height: 80%;" >
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalContenidoLabel">Contenido de Caja</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <!-- contenido -->
                   <iframe id="lectorPdf" style="width: 100%;"></iframe>
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
            <div class="col-7 text-left">
                <!-- filtro -->
                <form method="post" action="<?= base_url('caja/search') ?>">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" >
                        <option value="">Cualquier Estado</option>
                        <option value="PENDIENTE"> 
                        <i class='fas fa-circle text-success '>   
                        EN TRANSITO</option>
                        <option value="DISPONIBLE">DISPONIBLE</option>
                        <option value="OCUPADA">OCUPADA</option>
                    </select>
                    <button class="btn btn-primary ms-2" type="submit">
                        <i class="fas fa-filter"></i>
                        Buscar
                    </button>
                    <a href='<?= base_url('caja') ?>' class="btn btn-secondary ms-2">
                        <i class="far fa-eye-slash"></i>
                        Limpiar
                    </a>
                </form>

            </div>
            <!--  -->
            <div class="col-5">                
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                    <i class="fas fa-arrow-circle-down"></i>
                    Ingreso
                </button>
                <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                    <i class="fas fa-arrow-circle-up"></i>
                    Egreso
                </button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                    <i class="fas fa-plus-circle"></i>
                    Agregar
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
                    <td class="text-left" title="Ver Contenido de Caja"  >
                        <button class="btn btn-light">
                            <i class="fas fa-box-open"></i>
                        </button>
                    </td>
                    <td>
                        <a href="#" class="btn btn-light" id="pdfCaja" data-id="<?= $caja['id'] ?>" data-bs-toggle="modal" data-bs-target="#modalContenido"  >   <i class="fas fa-file-pdf"></i></a>
                        <a href="<?= base_url('cajamovimiento/show/' . $caja['id']) ?>" class="btn btn-light" > <i class="fas fa-inbox"></i></a>
                        <a href="<?= base_url('caja/show/' . $caja['id']) ?>" data-bs-toggle="modal" data-bs-target="#modalMostrar" class="btn btn-light"><i class="fas fa-eye text-primary "></i></a>
                        <a href="<?= base_url('caja/edit/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-pen text-info "></i></a>
                        <a href="<?= base_url('caja/delete/' . $caja['id']) ?>" class="btn btn-light"><i class="fas fa-trash text-danger "></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="container-fluid text-center  ">

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