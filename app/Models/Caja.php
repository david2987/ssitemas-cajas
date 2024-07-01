<?php

namespace App\Models;

use CodeIgniter\Model;

class Caja extends Model
{
    protected $table = 'cajas';
    protected $allowedFields = [
        'descripcion',
        'estado',
        'contenido',
        'fecha_retiro',
        'momento_retiro'
    ];

    // Métodos para ABM (Alta, Baja, Modificación)
    public function crearCaja($data)
    {
        $this->insert($data);
        return $this->insertID();
    }

    public function obtenerCajas()
    {
        return $this->findAll();
    }

    public function obtenerCaja($id)
    {
        return $this->find($id);
    }

    public function editarCaja($id, $data)
    {
        $this->update($id, $data);
    }

    public function eliminarCaja($id)
    {
        $this->delete($id);
    }
}