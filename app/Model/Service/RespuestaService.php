<?php
namespace App\Model\Service;

use App\Model\Dao\Respuestas as Respuestas;
use Mockery\CountValidator\Exception;

class RespuestaService
{
    public function __construct()
    {

    }

    public function all()
    {
        return Respuestas::all();
    }

    public function save($data, $idEgresados)
    {
        try {
            $data2 = \App\Util\Encuesta::parserValuesEncuesta($data);

            foreach ($data2 as $key => $reg ) {
                if (empty($reg['idAlternativas'])) {
                    continue;
                }

                $mRespuesta = new Respuestas();

                $mRespuesta->idEgresados    = $idEgresados;
                $mRespuesta->idAlternativas = $reg['idAlternativas'];
                $mRespuesta->descripcion    = !empty($reg['descripcion'])? $reg['descripcion']: null;

                $mRespuesta->save();
            }

            return true;
            
        } catch (Exception $e) {
            throw $e;
        }
    }
}
