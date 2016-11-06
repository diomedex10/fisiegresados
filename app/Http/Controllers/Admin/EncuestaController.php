<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Service\EncuestaService;

class EncuestaController extends Controller
{
    private $pageDescription;

    public function __construct()
    {
        $this->pageDescription = 'Administracion de encuesta';
    }

    public function index()
    {
        $mEncuesta = new EncuestaService();
        $dataEncuesta = $mEncuesta->all();
       
        $dataView = [
            'dataEncuesta'    => $dataEncuesta,
            'pageDescription' => $this->pageDescription
        ];

        return view('admin/encuesta')->with($dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->pageDescription = 'Creacion de Encuestas';

        $dataView = [
            'pageDescription' => $this->pageDescription,
            'states'          => \App\Util\Form::getStates(),
        ];

        return view('admin/encuestaCreate')->with($dataView);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $inputs = [
                'descripcion' => 'required',
                'estado'      => 'required'
            ];

            $this->validate($request, $inputs);

            $mEncuesta  = new EncuestaService();
            $statusSave = $mEncuesta->save($request);

            if ($statusSave == true) {
                return back()->with(['msg' => 'Datos guardados', 'css' => 'alert alert-success']);
            }

            return back()->with(['msg' => 'No se pudo guardar el registro', 'css' => 'alert alert-danger']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back();
        } catch (\Exception $e) {
            return back()->with(['msg' => $e->getMessage(), 'css' => 'alert alert-danger']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $this->pageDescription = 'Edicion de Encuestas';
            $serviceEncuesta       = new EncuestaService();
            
            $dataView = [
                'pageDescription' => $this->pageDescription,
                'states'          => \App\Util\Form::getStates(),
                'dataEncuesta'    => $serviceEncuesta->find($id)
            ];

            return view('admin/encuestaEdit')->with($dataView);
        
        } catch (\Exception $e) {
            return back()->with(['msg' => $e->getMessage(), 'css' => 'alert alert-danger']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $inputs = [
                'descripcion' => 'required',
                'estado'      => 'required'
            ];

            $this->validate($request, $inputs);
            
            $mEncuesta  = new EncuestaService();
            $statusSave = $mEncuesta->update($request);

            if ($statusSave == true) {
                return back()->with(['msg' => 'Datos guardados', 'css' => 'alert alert-success']);
            }

            return back()->with(['msg' => 'No se pudo guardar el registro', 'css' => 'alert alert-danger']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back();
        } catch (\Exception $e) {
            return back()->with(['msg' => $e->getMessage(), 'css' => 'alert alert-danger']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $mEncuesta = new EncuestaService();
            $status    = $mEncuesta->destroy($id);

            if (!empty($status)) {
                return back()->with(['msg' => 'Registro Eliminado', 'css' => 'alert alert-success']);
            }

            return back()->with(['msg' => 'No se pudo Eliminar el registro', 'css' => 'alert alert-danger']);
       
        } catch (\Exception $e) {
            return back()->with(['msg' => $e->getMessage(), 'css' => 'alert alert-danger']);
        }
    }
}
