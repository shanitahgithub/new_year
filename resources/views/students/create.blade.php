<!-- resources/views/students/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('students.fields')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection