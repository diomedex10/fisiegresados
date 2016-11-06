<?php
namespace App\Model\Service;

use App\Model\Dao\Pregunta as Pregunta;
use Mockery\CountValidator\Exception;

class PreguntaService 
{
    public function __construct()
    {

    }

    public function all()
    {
        return Pregunta::all();
    }

    public function save($data)
    {
        try {
            $mPregunta = new Pregunta();

            $mPregunta->descripcion  = $data->descripcion;
            $mPregunta->estado       = $data->estado;
            $mPregunta->idEncuestas  = $data->idEncuestas;

            $statusSave = $mPregunta->save();
            
            return $statusSave;
            
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function find($id)
    {
        try {
            $mPregunta = new Pregunta();
            return $mPregunta->find($id);

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function update($data)
    {
        try {
            $mPregunta = Pregunta::find($data->id);

            $mPregunta->descripcion = $data->descripcion;
            $mPregunta->estado      = $data->estado;

            return $mPregunta->save();

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function destroy($ids)
    {
        try {
            $mPregunta = Pregunta::find($ids);
            $mPregunta->estado = 0;

            return $mPregunta->save();

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getPreguntasAlternativas ($idEncuestas)
    {
        return Pregunta::with(array('alternativas'))
            ->where('idEncuestas', $idEncuestas)
            ->orderBy('order', 'asc')
            ->get();

    }
}
