@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
        <div class="row">
            
            <!-- Single Reciter -->
            @foreach($reciters as $reciter)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $reciter->name }}</h4>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset($reciter->photo) }}" style="width: 70px;">
                        <span>Tracks: {{ $reciter->audios->count() }}</span>
                    </div>
                    <div class="card-footer">
                        <p><a href="{{ route('single', ['id' => $reciter->id]) }}">View</a></p>
                    </div>
                </div>
                <br>
            </div>
              @endforeach
            <!-- END Single Reciter --> 
        
           
            
        </div>
        
        
        </div>
    </div>
</div>
@endsection
