<?php

namespace App\Models;

use CodeIgniter\Model;

class CajaMovimientos extends Model
{
    protected $table = 'caja_movimientos';
    protected $allowedFields = [
        'id',
        'caja_id',
        'fecha_salida',
        'fecha_entrada',
        'paciente',
        'medico',
        'servicio'
    ];

    // Métodos para ABM (Alta, Baja, Modificación)
    public function crearCajaMovimiento($data)
    {
        $this->insert($data);
        return $this->insertID();
    }

    public function obtenerCajaMovimientos()
    {
        return $this->findAll();
    }

    public function obtenerCajaMovimiento($id)
    {
        return $this->find($id);
    }

    public function editarCajaMovimiento($id, $data)
    {
        $this->update($id, $data);
    }

    public function eliminarCajaMovimiento($id)
    {
        $this->delete($id);
    }
}