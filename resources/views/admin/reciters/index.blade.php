@extends('admin.dashboard')


@section('content')

<div class="card">
    <div class="card-header" data-background-color="green">
       <span class="pull-right"><a class="btn btn-info btn-xs" href="{{ route('reciters.create') }}">Create Reciter</a></span>
        <h4 style="display:inline;">Reciters</h4>
    </div>
    <div class="card-content">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Edit</th>
                <th>Remove</th>
            </thead>
            <tbody>
                @foreach($reciters as $reciter)
                    <tr>
                        <td>{{ $reciter->id }}</td>
                        <td>{{ $reciter->name }}</td>
                        <td><img src="{{ asset($reciter->photo) }}" style="width: 80px;"></td>
                        <td><a href="{{ route('reciters.edit', ['id' => $reciter->id]) }}" class="btn btn-info">Edit</a></td>
                        <td>
                            <form action="" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
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