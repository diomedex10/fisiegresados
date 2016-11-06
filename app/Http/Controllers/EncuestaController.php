<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class EncuestaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $sPregunta = new \App\Model\Service\PreguntaService();
        $sEncuesta = new \App\Model\Service\EncuestaService();
        
        $dataView = [
            'dataPreguntas' => $sPregunta->getPreguntasAlternativas(1),
            'encuesta'      => $sEncuesta->find(1)
        ];

        return view('encuesta')->with($dataView);
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function store (Request $request)
    {
        try {

            $mRespuesta  = new \App\Model\Service\RespuestaService();
            $data        = $request->all();
            unset($data['_token']);
            $statusSave  = $mRespuesta->save($data, 1);

            if ($statusSave == true) {
                return back()->with(['msg' => 'Encuesta Registrada', 'css' => 'alert alert-success']);
            }

            return back()->with(['msg' => 'No se pudo registrar', 'css' => 'alert alert-danger']);

        } catch (\Exception $e) {
            return back()->with(['msg' => $e->getMessage(), 'css' => 'alert alert-danger']);
        }
    }
}