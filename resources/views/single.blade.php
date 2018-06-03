@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <!-- Single Reciter -->
            <div class="jumbotron">
                <p><img src="{{ asset($reciter->photo) }}" style="width: 120px;">
                <span>Name: </span>
                </p>
                <span>Tracks: 12</span>
            </div>
            <!-- END Single Reciter --> 
        
            <div class="card">
                <div class="card-header">
                    Tracks
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <th>NO</th>
                            <th>Title</th>
                            <th>Track</th>
                        </thead>
                        <tbody>
                            @foreach($reciter->audios->all() as $key => $audio)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $audio->title }}</td>
                                    <td>
                                        <audio controls>
                                            <source src="{{ asset($audio->path) }}" type="audio/mpeg" />
                                        </audio>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
