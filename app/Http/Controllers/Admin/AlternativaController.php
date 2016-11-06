<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Service\AlternativaService;

class AlternativaController extends Controller
{
    private $pageDescription;

    public function __construct()
    {
        $this->pageDescription = 'Administracion de alternativas';
    }

    public function index($idPreguntas)
    {
        $mPregunta    = new \App\Model\Service\PreguntaService();
        $mAlternativa = new AlternativaService();

        $dataAlternativa = $mAlternativa->findByPregunta($idPreguntas);

        $dataView = [
            'dataAlternativa'  => $dataAlternativa,
            'pregunta'         => $mPregunta->find($idPreguntas),
            'pageDescription'  => $this->pageDescription
        ];

        return view('admin/alternativa')->with($dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idPregunta)
    {
        $this->pageDescription = 'Creacion de Alternativas';
        $mPregunta             = new \App\Model\Service\PreguntaService();

        $dataView = [
            'pageDescription' => $this->pageDescription,
            'pregunta'        => $mPregunta->find($idPregunta),
            'states'          => \App\Util\Form::getStates(),
        ];

        return view('admin/alternativaCreate')->with($dataView);
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
                'idPreguntas' => 'required'
            ];

            $this->validate($request, $inputs);

            $mAlternativa  = new AlternativaService();
            $statusSave    = $mAlternativa->save($request);

            if ($statusSave == true) {
                return redirect()->route('admin.alternativa.index', ['idPreguntas' => $request->idPreguntas])
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
            $this->pageDescription = 'Edicion de Alternativas';
            $mAlternativa          = new AlternativaService();
            
            $dataView = [
                'pageDescription' => $this->pageDescription,
                'states'          => \App\Util\Form::getStates(),
                'dataEdit'        => $mAlternativa->find($id),
            ];

            return view('admin/alternativaEdit')->with($dataView);
        
        } catch (\Exception $e) {
            return back()->with(['msg' => $e->getMessage(), 'css' => 'alert alert-danger']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
            
            $mAlternativa  = new AlternativaService();
            $statusSave    = $mAlternativa->update($request);

            if ($statusSave == true) {
                return redirect()->route('admin.alternativa.index', ['idPreguntas' => $request->idPreguntas])
                    ->with(['msg' => 'Registro Guardado', 'css' => 'alert alert-success']);
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
            $mAlternativa = new AlternativaService();
            $status       = $mAlternativa->destroy($id);

            if (!empty($status)) {
                return back()->with(['msg' => 'Registro Eliminado', 'css' => 'alert alert-success']);
            }

            return back()->with(['msg' => 'No se pudo Eliminar el registro', 'css' => 'alert alert-danger']);
       
        } catch (\Exception $e) {
            return back()->with(['msg' => $e->getMessage(), 'css' => 'alert alert-danger']);
        }
    }
}
