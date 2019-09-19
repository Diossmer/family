<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    //
    protected $table = 'hijos';
    protected $fillable = [
        'name', 'apellido', 'user_id',
    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
