<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reciter extends Model
{
    
    protected $fillable =[
        'name', 'photo'
    ];
    
    public function audios(){
        return $this->hasMany('App\Audio');
    }
    
}
