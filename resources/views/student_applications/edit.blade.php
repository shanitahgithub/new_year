@extends('layouts.app')

@section('content')
<h1>Edit Student Application</h1>
<form action="{{ route('student_applications.update', $application->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('student_applications.fields')
    <button type="submit">Update</button>
</form>
@endsection