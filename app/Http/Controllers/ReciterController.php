<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reciter;
use File;

class ReciterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reciters =Reciter::all();
        
        return view('admin.reciters.index')->with('reciters', $reciters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reciters.create');
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
            'name' => 'required|min:3|max:255'
        ]);
        
        $reciter =new Reciter;
        $reciter->name =$request->name;
        if($request->hasFile('photo')){
            
            $image =$request->file('photo');
            $image_name =time().$image->getClientOriginalName();
            $image->move('uploads/avatars', $image_name);
            
            
            $reciter->photo ='uploads/avatars/'.$image_name;
            
        }else{
            $reciter->photo ='uploads/avatars/avatar.png';
        }
        $reciter->save();
        
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
        
        $reciter =Reciter::find($id);
        
        return view('admin.reciters.edit')->with('reciter', $reciter);
        
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
            'name' => 'required|min:3|max:255'
        ]);
        
        $reciter =Reciter::find($id);
        $reciter->name =$request->name;
        if($request->hasFile('photo')){
            
            File::delete($reciter->photo);
            
            $image =$request->file('photo');
            $image_name =time().$image->getClientOriginalName();
            $image->move('uploads/avatars', $image_name);
            
            
            $reciter->photo ='uploads/avatars/'.$image_name;
            
        }
        $reciter->save();
        
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
        
        $reciter =Reciter::find($id);
        File::delete($reciter->delete);
        $reciter->delete();
        
        return redirect()->back();
        
    }
    
}
