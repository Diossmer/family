<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Padre extends Model
{
    //
    protected $table = "padres";
    protected $fillable = ['name', 'apellido', 'user_id'];
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
