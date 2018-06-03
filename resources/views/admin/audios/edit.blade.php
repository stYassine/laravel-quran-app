@extends('admin.dashboard')


@section('content')

@if(count($errors) > 0)
   <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4>Edit Audios</h4>
    </div>
    <div class="card-content">
       
       <form action="{{ route('audios.update', ['id' => $audio->id]) }}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
           
           <div class="form-group">
               <label for="">Reciter</label>
               <select name="reciter_id" class="form-control">
                   <option value="">Choose</option>
                   @foreach($reciters as $reciter)
                       <option value="{{ $reciter->id }}" {{ $reciter->id == $audio->reciter_id ? 'selected' : '' }}>{{ $reciter->name }}</option>
                   @endforeach
               </select>
           </div>
           
           <div class="form-group">
               <label for="">Title</label>
               <input type="text" name="title" value="{{ $audio->title }}" class="form-control">
           </div>
           
           <div class="form-group">
               <label for="">Audio Preview</label>
               <audio controls class="form-control">
                    <source src="{{ asset($audio->path) }}" type="audio/ogg">
                    <source src="{{ asset($audio->path) }}" type="audio/mpeg">
               </audio>
           </div>
           
           <div class="form-group">
               <label for="">Audio</label>
               <input type="file" name="audio" class="form-control">
           </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
                
       </form>
       
    </div>
</div>

@endsection