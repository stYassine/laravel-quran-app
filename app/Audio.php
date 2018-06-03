<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $fillable =[
       'reciter_id', 'title', 'path'
    ];
    
    public function reciter(){
        return $this->belongsTo('App\Reciter');
    }
    
}
