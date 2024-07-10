<?php

namespace App\Controllers;

use App\Models\Caja;
use App\Controllers\BaseController;
use App\Libraries\Ciqrcode;

class CajasController extends BaseController
{
    private $ciqrcode;

    public function __construct()
    {
        $this->ciqrcode = new ciqrcode();
    }


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

    public function search()
    {

        $descripcion = $this->request->getVar('descripcion');

        $cajaModel = new Caja();
        $cajas = $cajaModel->obtenerCajaFiltro($descripcion);


        $data = [
            // 'title' => 'Cajas de cirugía',
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


    public function pdfCaja($id)
    {                
        $cajaModel = new Caja();
        $caja = $cajaModel->obtenerCajaPdf($id);                            

        return $caja['pdf_caja'];
        // returqn json_encode($caja);
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

        if ($this->request->getVar('img_src')) {
            $img_src = '';
        }

        // crea el QR de la caja
        $data = strval(rand(1, 1000000));
        $qr   = $this->generate_qrcode($data);
        $qr_file = $qr['file'];


        $data = [
            'numero_interno' => $this->request->getVar('numero_interno'),
            'descripcion' => $this->request->getVar('descripcion'),
            'estado' => $this->request->getVar('estado'),
            'contenido' => $this->request->getVar('contenido'),
            'qr_caja' => $qr_file,
            'img_src' => $img_src,
            'created_at' => date(now())
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
            'numero_interno' => $this->request->getVar('numero_interno'),
            'descripcion' => $this->request->getVar('descripcion'),
            'estado' => $this->request->getVar('estado'),
            'contenido' => $this->request->getVar('contenido'),
            'qr_caja' => 'QR CAJA',
            'img_src' => $this->request->getVar('img_src'),
            'updated_at' => date(now())
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

    public function getInfoCaja($id){
        $cajaModel = new Caja();
        $caja = $cajaModel->obtenerCaja($id);

        $data = [
            'caja' => $caja
        ];

        return json_encode($data);
    }

    public function generate_qrcode($data)
    {
        /* Data */
        $hex_data   = bin2hex($data);
        $save_name  = $hex_data . '.png';

        /* QR Code File Directory Initialize */
        $dir = QRCODE_URL;

        if (!file_exists($dir)) {
            mkdir($dir, 0775, true);
        }

        /* QR Configuration  */
        $config['cacheable']    = true;
        $config['imagedir']     = $dir;
        $config['quality']      = true;
        $config['size']         = '1024';
        $config['black']        = [255, 255, 255];
        $config['white']        = [255, 255, 255];

        $this->ciqrcode->initialize($config);

        /* QR Data  */
        $params['data']     = $data;
        $params['level']    = 'L';
        $params['size']     = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $save_name;

        $this->ciqrcode->generate($params);

        /* Return Data */
        return [
            'content' => $data,
            'file'    => $dir . $save_name,
        ];
    }



}
