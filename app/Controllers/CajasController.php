<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Caja;

class CajasController extends Controller
{
    public function index()
    {
        $cajaModel = new Caja();
        $cajas = $cajaModel->obtenerCajas();

        $data = [
            'title' => 'Cajas de cirugía',
            'cajas' => $cajas
        ];

        return view('cajas/index', $data);
    }

    public function show($id)
    {
        $cajaModel = new Caja();
        $caja = $cajaModel->obtenerCaja($id);

        if (!$caja) {
            return redirect('caja');
        }

        $data = [
            'title' => 'Caja de cirugía ' . $caja['id'],
            'caja' => $caja
        ];

        return view('cajas/show', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Crear caja de cirugía'
        ];

        return view('cajas/create', $data);
    }

    public function store()
    {
        $cajaModel = new Caja();

        $data = [
            'descripcion' => $this->request->getVar('descripcion'),
            'estado' => $this->request->getVar('estado'),
            'contenido' => $this->request->getVar('contenido'),
            'fecha_retiro' => $this->request->getVar('fecha_retiro'),
            'momento_retiro' => $this->request->getVar('momento_retiro')
        ];

        $cajaModel->crearCaja($data);

        return redirect('caja');
    }

    public function edit($id)
    {
        $cajaModel = new Caja();
        $caja = $cajaModel->obtenerCaja($id);

        if (!$caja) {
            return redirect('caja');
        }       

        $data = [
            'title' => 'Editar caja de cirugía ' . $caja['id'],
            'caja' => $caja
        ];

        return view('cajas/edit', $data);
    }

    public function update($id)
    {
        $cajaModel = new Caja();

        $data = [
            'descripcion' => $this->request->getVar('descripcion'),
            'estado' => $this->request->getVar('estado'),
            'contenido' => $this->request->getVar('contenido'),
            'fecha_retiro' => $this->request->getVar('fecha_retiro'),
            'momento_retiro' => $this->request->getVar('momento_retiro')
        ];

        $cajaModel->editarCaja($id, $data);

        return redirect('caja');
    }

    public function delete($id)
    {
        $cajaModel = new Caja();
        $cajaModel->eliminarCaja($id);

        return redirect('caja');
    }
}