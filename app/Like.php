<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    public $timestamps = false;
    protected $table = 'likes';
    protected $primaryKey = 'id_likes';
    public function user()
    {
        return $this->belongsTo('App\users','id');
    }
    public function pregunta()
    {
        return $this->belongsTo('App\pregunta','id_pregunta');
    }
}
