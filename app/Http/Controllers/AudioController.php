<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Audio;
use App\Reciter;

use File;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $audios =Audio::all();
        
        return view('admin.audios.index')->with('audios', $audios);
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reciters =Reciter::all();
        
        return view('admin.audios.create')->with('reciters', $reciters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $this->validate($request, [
            'reciter_id' => 'required|integer',
            'title' => 'required|min:3|max:255',
            'audio' => 'required'
        ]);
        
        $audio =new Audio;
        $audio->reciter_id =$request->reciter_id;
        $audio->title =$request->title;
        
        $audio_file =$request->file('audio');
        
        $num_1 =rand(0, 100000000);
        $num_2 =md5(rand(0, 100000000) * $num_1) ;
        
        $file_name =time().$num_2.'.'.$audio_file->getClientOriginalExtension();
        
        $audio_file->move('uploads/audios', $file_name);
        
        $audio->path ='uploads/audios/'.$file_name;
        $audio->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $audio =Audio::find($id);
        $reciters =Reciter::all();
        
        return view('admin.audios.edit')->with([
            'audio' => $audio,
            'reciters' => $reciters
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'reciter_id' => 'required|integer',
            'title' => 'required|min:3|max:255',
            'audio' => 'required'
        ]);
        
        $audio =Audio::find($id);
        $audio->reciter_id =$request->reciter_id;
        $audio->title =$request->title;
        if($request->hasFile('audio')){
            
            File::delete($audio->path);
        
            $audio_file =$request->file('audio');

            $num_1 =rand(0, 100000000);
            $num_2 =md5(rand(0, 100000000) * $num_1) ;

            $file_name =time().$num_2.'.'.$audio_file->getClientOriginalExtension();

            $audio_file->move('uploads/audios', $file_name);

            $audio->path ='uploads/audios/'.$file_name;
            
        }
        $audio->save();
        
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $audio =Audio::find($id);
        File::delete($audio->path);
        $audio->delete();
        
        return redirect()->back();
        
    }
    
    
}
