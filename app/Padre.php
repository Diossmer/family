<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    //
    protected $table='padres';
    protected $fillable=[
        'name','lastname','age','color',
    ];
    public function hijos()
    {
        return $this->hasMany('App\Padre');
    }
}
