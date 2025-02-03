{{-- @extends('layouts.app')
@section('title')
@lang('models/courses.singular') @lang('crud.details')
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>@lang('models/courses.singular') @lang('crud.details')</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('courses.index') }}" class="btn btn-primary form-btn float-right">@lang('crud.back')</a>
        </div>
    </div>
    @include('stisla-templates::common.errors')
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                @include('courses.show_fields')
            </div>
        </div>
    </div>
</section>
@endsection
--}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Course Unit Details</h1>
    <p><strong>Name:</strong> {{ $courseUnit->name }}</p>
    <p><strong>Description:</strong> {{ $courseUnit->description }}</p>
    <p><strong>Semester:</strong> {{ $courseUnit->semester }}</p>
    <p><strong>Course Unit Code:</strong> {{ $courseUnit->course_unit_code }}</p>
    <p><strong>Status:</strong> {{ $courseUnit->status }}</p>
    <p><strong>Semester ID:</strong> {{ $courseUnit->semester_id }}</p>
    <p><strong>Credit Unit:</strong> {{ $courseUnit->credit_unit }}</p>
    <p><strong>Created By:</strong> {{ $courseUnit->created_by }}</p>
    <a href="{{ route('course-units.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection