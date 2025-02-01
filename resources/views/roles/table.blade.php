@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Roles List</h2>
    <a href="{{ route('roles.create') }}" class="btn btn-primary">Add New Role</a>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>Name</th>
                    <th>Guard Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    {{-- <td>{{ $role->id }}</td> --}}
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->guard_name }}</td>
                    <td>
                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection