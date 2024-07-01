<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Movimiento de Caja</title>
</head>

<body>
    <h1>Agregar Movimiento de Caja</h1>

    <form method="post" action="<?= base_url('cajamovimiento/store') ?>">
        <div class="form-group">
            <label for="caja_id">Caja:</label>
            <input type="number" name="caja_id" id="caja_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_entrada">Fecha de Entrada:</label>
            <input type="date" name="fecha_entrada" id="fecha_entrada" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="date" name="fecha_salida" id="fecha_salida" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <input type="text" name="paciente" id="paciente" class="form-control" required>
        </div>   
        <div class="form-group">
            <label for="medico">Medico:</label>
            <input type="text" name="medico" id="medico" class="form-control" required>
        </div>   
        <div class="form-group">
            <label for="servicio">Servicio:</label>
            <input type="text" name="servicio" id="servicio" class="form-control" required>
        </div>       
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</body>

</html>