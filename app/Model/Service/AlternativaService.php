<?php
namespace App\Model\Service;

use App\Model\Dao\Alternativa as Alternativa;
use Mockery\CountValidator\Exception;

class AlternativaService
{
    public function __construct()
    {

    }

    public function all()
    {
        return Alternativa::all();
    }

    public function save($data)
    {
        try {
            $mAlternativa = new Alternativa();

            $mAlternativa->descripcion  = $data->descripcion;
            $mAlternativa->estado       = $data->estado;
            $mAlternativa->idPreguntas  = $data->idPreguntas;

            $statusSave = $mAlternativa->save();
            
            return $statusSave;
            
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function find($id)
    {
        try {
            $mAlternativa = new Alternativa();
            return $mAlternativa->find($id);

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function findByPregunta($idPreguntas)
    {
        try {
            $mAlternativa = new Alternativa();
            return $mAlternativa->where('idPreguntas', $idPreguntas)->get();

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function update($data)
    {
        try {
            $mAlternativa = Alternativa::find($data->id);

            $mAlternativa->descripcion  = $data->descripcion;
            $mAlternativa->estado       = $data->estado;

            return$mAlternativa->save();

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function destroy($ids)
    {
        try {
            $mAlternativa = Alternativa::find($ids);
            $mAlternativa->estado = 0;

            return $mAlternativa->save();

        } catch (Exception $e) {
            throw $e;
        }
    }
}
