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
        <h4>Audios</h4>
    </div>
    <div class="card-content">
       
       <form action="{{ route('audios.store') }}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
           
           <div class="form-group">
               <label for="">Reciter</label>
               <select name="reciter_id" class="form-control">
                   <option value="">Choose</option>
                   @foreach($reciters as $reciter)
                       <option value="{{ $reciter->id }}">{{ $reciter->name }}</option>
                   @endforeach
               </select>
           </div>
           
           <div class="form-group">
               <label for="">Title</label>
               <input type="text" name="title" class="form-control">
           </div>
           
           <div class="form-group">
               <label for="">Audio</label>
               <input type="file" name="audio" class="form-control">
           </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
                
       </form>
       
    </div>
</div>

@endsection