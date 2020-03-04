<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public function preguntas()
    {
        return $this->hasMany('App\pregunta','id_pregunta');
    }
    public function respuestas()
    {
        return $this->hasMany('App\respuesta','id_respuesta');
    }
    public function likes()
    {
        return $this->hasMany('App\like','id_like');
    }

}
