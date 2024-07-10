<?php

namespace App\Controllers;

use App\Models\Caja;
use CodeIgniter\Controller;
use App\Controllers\CajasController;
use App\Models\CajaMovimientos;


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

    public function create($cajaid,$tipoMovmiento)
    {

        // busca el titulo de la caja
        $controllerLoader = new CajasController();
        $caja_json = $controllerLoader->getInfoCaja($cajaid);
        $caja = json_decode($caja_json);
        
        if($caja){
            $tituloCaja = $caja->caja->descripcion;
        }else{
            $tituloCaja = 'CAJA SIN REGISTRAR';
        }
        
        $data = [
            'caja' => $cajaid,   
            'tituloCaja' => $tituloCaja,         
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
        try {
            $cajaMovimientoModel->crearcajaMovimiento($data);            
        } catch (\Throwable $th) {
            return "<h1>Error al crear Movimiento </h1>";        
        }
        return "<h2 style='color:#3B9802' >Movimiento Creado Satisfactioriamente! </h2>";

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
