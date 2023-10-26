@extends('..layouts.app')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-2">

        <h2>Add Position</h2>
            
    
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    <form action="{{ route('positions.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">


        <div class="col-md-8 mt-3">
            <div class="form-group">
                <strong>Position</strong>
                <input type="text" name="position" class="form-control">
                @error('position')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-8 mt-3">
            <div class="form-group">
                <strong>Permission</strong>
                <input type="text" name="permission" class="form-control">
                @error('permission')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div></div>

        <div class="col-md-3 mt-3">
        <button type="submit" class="btn btn-success mt-3" style="padding:10px 50px">Create</button>
        </div>

    </div>
</form>

    </div>
</div>

@endsection