{{--

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Course Units</h1>
    <a href="{{ route('course-units.create') }}" class="btn btn-primary mb-3">Create Course Unit</a>
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courseUnits as $courseUnit)
            <tr>
                <td>{{ $courseUnit->name }}</td>
                <td>{{ $courseUnit->description }}</td>
                <td>{{ $courseUnit->semester }}</td>
                <td>{{ $courseUnit->status }}</td>
                <td>
                    <a href="{{ route('course-units.show', $courseUnit->id) }}" class="btn btn-light">View</a>
                    <a href="{{ route('course-units.edit', $courseUnit->id) }}" class="btn btn-warning">Edit</a>
                    {!! Form::open(['route' => ['course-units.destroy', $courseUnit->id], 'method' => 'delete',
                    'style' => 'display:inline']) !!}
                    {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit', 'onclick' =>
                    'return confirm("Are you sure?")']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Course Units</h3>

    <!-- Link to create a new course unit -->
    <a href="{{ route('course-units.create') }}" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i> Add New Course Unit
    </a>

    <!-- Display success message if any -->
    {{-- @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif --}}

    <!-- Include the table to show course units -->
    @include('courses.table', ['courseUnits' => $courseUnits])

</div>
@endsection