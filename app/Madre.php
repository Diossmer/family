<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    //
    protected $table='madres';
    protected $fillable=[
        'name','lastname','age','color',
    ];
    public function hijos()
    {
        return $this->hasMany('App\Hijo');
    }
}
