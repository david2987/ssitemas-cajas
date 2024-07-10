<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\cajaMovimientos;

class cajaMovimientosController extends Controller
{
    public function index()
    {
        $cajaMovimientoModel = new cajaMovimientos();
        $cajaMovimientos = $cajaMovimientoModel->obtenercajaMovimientos();

        $data = [
            'title' => 'Movimientos de Caja',
            'cajaMovimientos' => $cajaMovimientos
        ];

        return view('cajaMovimientos/index', $data);
    }

    public function show($id)
    {
        $cajaMovimientoModel = new cajaMovimientos();
        $cajaMovimiento = $cajaMovimientoModel->obtenercajaMovimiento($id);

        if (!$cajaMovimiento) {
            return redirect('cajamovimiento');
        }

        $data = [
            'title' => 'Movimiento de cirugía ' . $cajaMovimiento['id'],
            'cajaMovimiento' => $cajaMovimiento
        ];

        return view('cajaMovimientos/show', $data);
    }

    public function create($caja,$tipoMovmiento)
    {
        $data = [
            'caja' => $caja,
            'tipoMovmiento' => $tipoMovmiento
        ];

        return view('cajaMovimientos/create', $data);
    }

    public function store()
    {
        $cajaMovimientoModel = new cajaMovimientos();

        $data = [
            'caja_id' => $this->request->getVar('caja_id'),
            'fecha_salida' => $this->request->getVar('fecha_salida'),
            'fecha_entrada' => $this->request->getVar('fecha_entrada'),
            'paciente' => $this->request->getVar('paciente'),
            'medico' => $this->request->getVar('medico'),
            'servicio' => $this->request->getVar('servicio'),
            'tipo_entrada' => $this->request->getVar('tipo_entrada'),
            'momento_retiro' => $this->request->getVar('momento_retiro'),
            'created_at' => $this->request->getVar(''),
            'usuario_despacho' => $this->request->getVar('usuario_despacho'),

            // 'caja_id' => $this->request->getVar('caja_id'),
            // 'fecha_salida' => $this->request->getVar('fecha_salida'),
            // 'fecha_entrada' => $this->request->getVar('fecha_entrada'),
            // 'paciente' => $this->request->getVar('paciente'),
            // 'medico' => $this->request->getVar('medico'),
            // 'servicio' => $this->request->getVar('servicio'),
        ];

        $cajaMovimientoModel->crearcajaMovimiento($data);

        return redirect('cajamovimiento');
    }

    public function edit($id)
    {
        $cajaMovimientoModel = new cajaMovimientos();
        $cajaMovimiento = $cajaMovimientoModel->obtenercajaMovimiento($id);

        if (!$cajaMovimiento) {
            return redirect('cajamovimiento');
        }


        $data = [
            'title' => 'Editar cajaMovimiento de cirugía ' . $cajaMovimiento['id'],
            'cajaMovimiento' => $cajaMovimiento
        ];

        return view('cajaMovimientos/edit', $data);
    }

    public function update($id)
    {
        $cajaMovimientoModel = new cajaMovimientos();

        $data = [
            'caja_id' => $this->request->getVar('caja_id'),
            'fecha_salida' => $this->request->getVar('fecha_salida'),
            'fecha_entrada' => $this->request->getVar('fecha_entrada'),
            'paciente' => $this->request->getVar('paciente'),
            'medico' => $this->request->getVar('medico'),
            'servicio' => $this->request->getVar('servicio'),
            'tipo_entrada' => $this->request->getVar('tipo_entrada'),
            'momento_retiro' => $this->request->getVar('momento_retiro'),
            'updated_at' => $this->request->getVar(''),
            'usuario_despacho' => $this->request->getVar('usuario_despacho'),
        ];

        $cajaMovimientoModel->editarcajaMovimiento($id, $data);

        return redirect('cajamovimiento');
    }

    public function delete($id)
    {
        $cajaMovimientoModel = new cajaMovimientos();
        $cajaMovimientoModel->eliminarcajaMovimiento($id);

        return redirect('cajamovimiento');
    }
}
