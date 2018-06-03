@extends('admin.dashboard')


@section('content')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <span class="pull-right"><a class="btn btn-info btn-xs" href="{{ route('audios.create') }}">Create Audio</a></span>
        <h4 style="display:inline;">Audios</h4>
    </div>
    <div class="card-content">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Reciter Id</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Remove</th>
            </thead>
            <tbody>
                @foreach($audios as $audio)
                    <tr>
                        <td>{{ $audio->id }}</td>
                        <td>{{ $audio->reciter->name }}</td>
                        <td>{{ $audio->title }}</td>
                        <td><a href="{{ route('audios.edit', ['id' => $audio->id]) }}" class="btn btn-info">Edit</a></td>
                        <td>
                            <form action="{{ route('audios.destroy', ['id' => $audio->id]) }}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection