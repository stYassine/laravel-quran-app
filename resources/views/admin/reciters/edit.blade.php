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
        <h4>Update Reciters</h4>
    </div>
    <div class="card-content">
       
       <form action="{{ route('reciters.update', ['id' => $reciter->id]) }}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
           
           <div class="form-group">
               <label for="">Name</label>
               <input type="text" name="name" value="{{ $reciter->name }}" class="form-control">
           </div>
           
           <div class="form-group">
               <label for="">Photo</label>
               <img src="{{ asset($reciter->photo) }}" style="width: 120px;">
           </div>
           
           <div class="form-group">
               <label for="">Photo</label>
               <input type="file" name="photo" class="form-control">
           </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
                
       </form>
       
    </div>
</div>

@endsection