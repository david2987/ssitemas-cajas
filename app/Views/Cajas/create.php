<form method="post" action="<?= base_url('caja/store') ?>">
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="estado">Estado:</label>
        <select name="estado" id="estado" class="form-control" required>
            <option value="PENDIENTE">PENDIENTE</option>
            <option value="DISPONIBLE">DISPONIBLE</option>
            <option value="EN TRANSITO">EN TRANSITO</option>
        </select>
    </div>
    <div class="form-group">
        <label for="contenido">Contenido:</label>
        <textarea type="text" name="contenido" id="contenido" class="form-control" required>
            </textarea>
    </div>
    <div class="form-group">
        <label for="img_src">Imagen:</label>
        <input type="file" id="avatar" name="img_src" accept="image/png, image/jpeg" />
        </textarea>
    </div>

    <button type="button" class="btn btn-primary botonAgregar ">Agregar</button>
</form>