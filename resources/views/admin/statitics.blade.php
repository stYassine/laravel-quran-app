@extends('admin.dashboard')


@section('content')

<h1>Statitics</h1>

<div class="row">
    
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">group</i>
            </div>
            <div class="card-content">
                <p class="category">Reciters</p>
                <h3 class="title">{{ $reciters->count() }}
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">search</i>
                    <a href="{{ route('reciters.index') }}">View..</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="blue">
                <i class="material-icons">audiotrack</i>
            </div>
            <div class="card-content">
                <p class="category">Tracks</p>
                <h3 class="title">{{ $audios->count() }}
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">search</i>
                    <a href="{{ route('audios.index') }}">View...</a>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection