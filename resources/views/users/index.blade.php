@extends('layouts.app')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 text-center">
                <h2 style="font-size:40px;">Employees</h2>
        </div>

        <div class="text-end">
            <a href="/register" class="btn btn-success" style="margin: 20px 0;font-size:20px;" > Add Employee</a>
        </div>

    </div>

    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Sex</td>
            <td>Department</td>
            <td>Position</td>
            <td>Salary</td>
            <td>Birthdate</td>
            <td>E-Mail</td>
            <td>Action</td>
        </tr>
        
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->sex }}</td>
                <td>{{ $user->department }}</td>
                <td>{{ $user->position_id }}</td>
                <td>{{ $user->salary }}</td>
                <td>{{ $user->birthdate }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                    </form>
                </td>
            </tr> 
            @endforeach
        </table>
    </div>

@endsection
