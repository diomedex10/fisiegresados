<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Service\PreguntaService;

class PreguntaController extends Controller
{
    private $pageDescription;

    public function __construct()
    {
        $this->pageDescription = 'Administracion de Preguntas';
    }

    public function index($idEncuesta)
    {
        $mEncuesta = new \App\Model\Service\EncuestaService();
        $mPregunta = new PreguntaService();

        $dataPregunta = $mPregunta->all();

        $dataView = [
            'dataPregunta'    => $dataPregunta,
            'encuesta'        => $mEncuesta->find($idEncuesta),
            'pageDescription' => $this->pageDescription
        ];

        return view('admin/pregunta')->with($dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idEncuesta)
    {
        $this->pageDescription = 'Creacion de Preguntas';
        $mEncuesta             = new \App\Model\Service\EncuestaService();

        $dataView = [
            'pageDescription' => $this->pageDescription,
            'encuesta'        => $mEncuesta->find($idEncuesta),
            'states'          => \App\Util\Form::getStates(),
        ];

        return view('admin/preguntaCreate')->with($dataView);
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
                'estado'      => 'required',
                'idEncuestas' => 'required'
            ];

            $this->validate($request, $inputs);

            $mPregunta  = new PreguntaService();
            $statusSave = $mPregunta->save($request);

            if ($statusSave == true) {
                return redirect()->route('admin.pregunta.index', ['idEncuestas' => $request->idEncuestas])
                    ->with(['msg' => 'Registro Guardado', 'css' => 'alert alert-success']);
            }

            return back()->with(['msg' => 'No se pudo registrar', 'css' => 'alert alert-danger']);

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
            $this->pageDescription = 'Edicion de Preguntas';
            $servicePregunta      = new PreguntaService();
            
            $dataView = [
                'pageDescription' => $this->pageDescription,
                'states'          => \App\Util\Form::getStates(),
                'dataEdit'        => $servicePregunta->find($id),
            ];

            return view('admin/preguntaEdit')->with($dataView);
        
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
                'estado'      => 'required',
                'id'          => 'required'
            ];

            $this->validate($request, $inputs);
            
            $mPregunta  = new PreguntaService();
            $statusSave = $mPregunta->update($request);

            if ($statusSave == true) {
                return redirect()->route('admin.pregunta.index', ['idEncuestas' => $request->idEncuestas])
                    ->with(['msg' => 'Registro Guardado', 'css' => 'alert alert-success']);
            }

            return back()->with(['msg' => 'No se pudo guardar el registro', 'css' => 'alert alert-danger']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->getMessage());exit;
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
            $mEncuesta = new PreguntaService();
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
