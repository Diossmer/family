<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    //
    protected $table = "madres";
    protected $fillable = ['name', 'apellido', 'user_id'];
    public function user()
    {

        return $this->hasOne('App\User');
    }
}
