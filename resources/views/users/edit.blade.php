@extends('..layouts.app')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-2">

        <h2>Edit Employee</h2>
            
    
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="row">


        <div class="col-md-8 mt-3">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" value="{{ $user->name }}" name="name" class="form-control">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-8 mt-3">
            <div class="form-group">
                <strong>Surname</strong>
                <input type="text" value="{{ $user->surname }}" name="surname" class="form-control">
                @error('surname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div class="form-group">
                <strong>Sex</strong>
                <input type="text" value="{{ $user->sex }}" name="sex" class="form-control">
                @error('sex')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div class="form-group">
                <strong>Address</strong>
                <input type="text" value="{{ $user->address }}" name="address" class="form-control">
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div class="form-group">
                <strong>Position</strong>
                <input type="text" value="{{ $user->position }}" name="position" class="form-control">
                @error('position')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div class="form-group">
                <strong>Department</strong>
                <input type="text" value="{{ $user->department }}" name="department" class="form-control">
                @error('department')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-8 mt-3" style="margin-right:1000px;">
            <div class="form-group">
                <strong>Salary</strong>
                <input type="text" value="{{ $user->salary }}" name="salary" class="form-control">
                @error('salary')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="col-md-3 mt-3">
            <div class="form-group">
                <strong>Birthdate</strong>
                <input type="date" value="{{ $user->birthdate }}" name="birthdate" class="form-control">
                @error('birthdate')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



        <button type="submit" class="btn btn-success mt-3" style="padding:10px 50px">Submit</button>
        </div>

    </div>
</form>

    </div>
</div>

@endsection