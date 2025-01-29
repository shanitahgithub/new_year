{{-- @extends('layouts.app')
@section('title')
    @lang('crud.edit') @lang('models/courses.singular')
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">@lang('crud.edit') @lang('models/courses.singular')</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('courses.index') }}"  class="btn btn-primary">@lang('crud.back')</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($course, ['route' => ['courses.update', $course->id], 'method' => 'patch']) !!}
                                        <div class="row">
                                            @include('courses.fields')
                                        </div>

                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection --}}

@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header"> 
         <h3 class="page__heading m-0">@lang('Edit Course Unit')</h3> 
        <div class="filter-container section-header-breadcrumb row justify-content-md-end">
            <a href="{{ route('course-units.index') }}" class="btn btn-primary">@lang('Back')</a>
        </div> 
    </div>
    <p></p>
    <div class="container">
        {{-- <div class="filter-container section-header-breadcrumb row justify-content-md-end">
            <a href="{{ route('course-units.index') }}" class="btn btn-primary">@lang('Back')</a>
        </div> --}}
        {{-- <h1>Edit Course Unit</h1> --}}
        <form action="{{ route('course-units.update', $courseUnit->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $courseUnit->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $courseUnit->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Semester</label>
                <textarea name="semester" id="semester" class="form-control" required>{{ $courseUnit->semester }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning mt-3">Update Course Unit</button>
        </form>
    </div>
@endsection
