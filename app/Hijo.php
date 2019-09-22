<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    //
    protected $table='hijos';
    protected $fillable=[
        'name','lastname','padres_id','madres_id',
    ];
    public function padre()
    {
        return $this->belongsTo('App\Padre', 'padres_id');
    }
    public function madre()
    {
        return $this->belongsTo('App\Madre', 'madres_id');
    }
}
