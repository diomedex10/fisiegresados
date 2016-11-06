<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $primaryKey = 'idPreguntas';
    
    public function alternativas(){
        
        return $this->hasMany('\App\Model\Dao\Alternativa', 'idPreguntas', 'idPreguntas');
    }
}
