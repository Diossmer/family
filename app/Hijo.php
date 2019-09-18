<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Hijo extends Model
{
    //
    protected $table = 'hijos';
    protected $fillable = [
        'name', 'apellido', 'user_id',
    ];
    public function user()
    {
        return $this->hasMany('App\Comment');
        //return $this->belongsTo('App\User');
    }
}
