<?php
namespace App\Util;

class Encuesta
{
    public static function parserValuesEncuesta($params)
    {
        $result = null;

        if (empty($params)) {
            return $result;
        }

        foreach ($params as $key => $value) {
            $temp = explode('_', $key);
            $temp1 = [];
            $key  = $temp[1] ;

            if (!empty($result[$key])) {
                $temp1 = $result[$key] ;
            }

            if ($temp[0] == 'alternativas') {
                $temp1['idAlternativas'] = $value;
            } elseif ($temp[0] == 'alternativasText') {
                $temp1['descripcion'] = $value;
            }

            $result[$key] = $temp1;
        }

        return $result;
    }
}