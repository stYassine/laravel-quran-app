<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reciter;
use App\Audio;


class FrontController extends Controller
{
    
    
    public function index(){
        
        $reciters =Reciter::all();
        
        return view('index')->with('reciters', $reciters);
        
    }
    
    public function single($id){
        
        $reciters =Reciter::all();
        
        $reciter =Reciter::find($id);
        
        return view('single')->with([
            'reciter' => $reciter,
            'reciters' => $reciters,
        ]);
        
    }
    
    
}
