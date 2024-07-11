<?php

namespace App\Models;

use CodeIgniter\Model;

class Caja extends Model
{
    protected $table = 'cajas';
    protected $allowedFields = [
        'id',
        'numero_interno',
        'descripcion',
        'estado',
        'contenido',
        'pdf_caja',
        'qr_caja',
        'img_src',
        'created_at',
        'updated_at'
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



    public function obtenerCajaFiltro($descripcion = '', $estado = '')
    {

        //->orLike('estado',$estado)
        $data = $this->like('descripcion', $descripcion)->findAll(); // $builder->where('descripcion', 'CAJA 1');             
        return $data;
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

    public function obtenerCajaPdf($id)
    {
        $data = $this->find($id);      
        return $data;
    }

    public function cambioEstado($id,$nuevoEstado){
        $data = [
            'estado' => $nuevoEstado
        ];

        log_message('error', var_export($nuevoEstado,true)); // <----- LOG 

        $this->update($id, $data);
    }

}
