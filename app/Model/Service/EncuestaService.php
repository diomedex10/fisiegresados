<?php
namespace App\Model\Service;
use App\Model\Dao\Encuesta as Encuesta;
use Mockery\CountValidator\Exception;

class EncuestaService 
{
    public function __construct()
    {

    }

    public function all()
    {
        return Encuesta::all();
    }

    public function save($data)
    {
        try {
            $mEncuesta = new Encuesta();
            
            $mEncuesta->descripcion  = $data->descripcion;
            $mEncuesta->estado       = $data->estado;

            $statusSave = $mEncuesta->save();
            
            return $statusSave;
            
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function find($id)
    {
        try {
            $mEncuesta = new Encuesta();
            return $mEncuesta->find($id);

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function update($data)
    {
        try {
            $mEncuesta = Encuesta::find($data->id);

            $mEncuesta->descripcion  = $data->descripcion;
            $mEncuesta->estado       = $data->estado;
            $mEncuesta->idEncuestas  = $data->id;

            $statusSave = $mEncuesta->save();

            return $statusSave;

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function destroy($ids)
    {
        try {
            return Encuesta::destroy($ids);

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getDataEncuesta()
    {

    }
}
