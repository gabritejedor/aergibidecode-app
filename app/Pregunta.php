<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    public $timestamps = false;
    protected $table = 'preguntas';
    protected $primaryKey = 'id_pregunta';
    public function user()
    {
        return $this->belongsTo('App\users','id_user');
    }
    public function likes()
    {
        return $this->hasMany('App\like');
    }
    public function respuestas()
    {
        return $this->hasMany('App\respuesta','id_pregunta');
    }
}
