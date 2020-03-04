<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
    public $timestamps = false;
    protected $table = 'respuestas';
    protected $primaryKey = 'id_respuesta';
    public function user()
    {
        return $this->belongsTo('App\users','id_user');
    }
    public function preguntas()
    {
        return $this->belongsTo('App\pregunta');
    }

}
