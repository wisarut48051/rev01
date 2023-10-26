@extends('layouts.app')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 text-center">
                <h2 style="font-size:40px;">Positions</h2>
        </div>

        <div class="text-end">
            <a href="{{ route('positions.create') }}" class="btn btn-success" style="margin: 20px 0;font-size:20px;" > Add Positions </a>
        </div>

    </div>

    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Position</td>
            <td>Permission</td>
            <td>Action</td>
        </tr>
        
        @foreach ($positions as $position)
            <tr>
                <td>{{ $position->id }}</td>
                <td>{{ $position->position }}</td>
                <td>{{ $position->permission }}</td>
            </tr> 
            @endforeach
        </table>
    </div>

@endsection
