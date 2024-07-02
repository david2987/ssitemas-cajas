<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar caja de cirugía <?= $caja['id'] ?></title>
</head>

<body>

    <?= $this->extend('layout_popup') ?>

    <?= $this->section('contenido') ?>
 
    <form method="post" action="<?= base_url('caja/update/' . $caja['id']) ?>">
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?= $caja['descripcion'] ?>" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="PENDIENTE" <?php if ($caja['estado'] == 'PENDIENTE') echo 'selected'; ?>>PENDIENTE</option>
                <option value="DISPONIBLE" <?php if ($caja['estado'] == 'DISPONIBLE') echo 'selected'; ?>>DISPONIBLE</option>
                <option value="EN TRANSITO" <?php if ($caja['estado'] == 'EN TRANSITO') echo 'selected'; ?>>EN TRANSITO</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <input type="text" name="contenido" id="contenido" class="form-control" value="<?= $caja['contenido'] ?>" required>
        </div>

        <div class="form-group">
            <label for="img_src">Imagen:</label>
            <?php 
                if($caja['img_src']){
                    echo "<img src='".base_url(IMG_UPLOAD.$caja['img_src'])."' width='50' height='50'>";
                }else{
            ?>        
                <label for="img_src">Imagen:</label>
                <input- type="file" name="img_src" id="img_src" class="form-control" required>
           <?php     
                }
            ?>
        </div>
       
        
        
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>

</body>

</html>


<?php echo  $this->endSection(); ?>