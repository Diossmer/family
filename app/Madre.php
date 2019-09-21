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
    public function madre()
    {
        return $this->belongsTo('App\Madre');
    }
}
