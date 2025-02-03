@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Course Unit</h1>
    {!! Form::open(['route' => 'course-units.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
    </div>
    {{-- <div class="form-group">
        {!! Form::label('semester_id', 'Semester') !!}
        {!! Form::select('semester_id', $semesters->pluck('name', 'id'), null, ['class' => 'form-control', 'required'])
        !!}
    </div> --}}

    {{-- <div class="form-group">
        {!! Form::label('semester_id', 'Semester') !!}
        {!! Form::select('semester_id', $semesters->pluck('name', 'id'), null, ['class' => 'form-control', 'required'])
        !!}
    </div> --}}
    <select class="form-control" name="semester_id" required>
        @foreach($semesters as $semester)
        <option value="{{ $semester->id }}">{{ $semester->name }}</option>
        @endforeach
    </select>





    <div class="form-group">
        {!! Form::label('course_unit_code', 'Course Unit Code') !!}
        {!! Form::text('course_unit_code', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('status', ['active' => 'Active', 'inactive' => 'Inactive'], null, ['class' =>
        'form-control'])
        !!}
    </div>
    <div class="form-group">
        {!! Form::label('credit_unit', 'Credit Unit') !!}
        {!! Form::number('credit_unit', 3, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Create Course Unit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
@endsection