<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reciter;
use App\Audio;

class AdminController extends Controller
{
    
    
    public function dashboard(){
        
        $reciters =Reciter::all();
        $audios =Audio::all();
        
        return view('admin.statitics')->with([
            'reciters' => $reciters,
            'audios' => $audios
        ]);
        
    }
    
    
}
