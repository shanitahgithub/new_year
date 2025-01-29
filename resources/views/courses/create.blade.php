{{-- @extends('layouts.app')
@section('title')
    @lang('crud.add_new') @lang('models/courses.singular')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">@lang('') @lang('models/courses.singular')</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('courses.index') }}" class="btn btn-primary">@lang('Back')</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                                {!! Form::open(['route' => 'courses.store']) !!}
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
@endsection
 --}}


 {{-- {!! Form::open(['route' => 'course-units.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Course Unit Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('semester', 'Semester:') !!}
        {!! Form::text('semester', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!} --}}


@extends('layouts.app')

@section('title')
    @lang('crud.add_new') @lang('models/course-units.singular')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">@lang('Add Course Unit')</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('course-units.index') }}" class="btn btn-primary">@lang('Back')</a>
            </div>
        </div>

        <div class="content">
            @include('stisla-templates::common.errors')

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                {!! Form::open(['route' => 'course-units.store']) !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Course Unit Name Field -->
                                            <div class="form-group">
                                                {!! Form::label('name', 'Course Unit Name:') !!}
                                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Course Unit Name']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Description Field -->
                                            <div class="form-group">
                                                {!! Form::label('description', 'Description:') !!}
                                                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter Course Unit Description']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Semester Field -->
                                            <div class="form-group">
                                                {!! Form::label('semester', 'Semester:') !!}
                                                {!! Form::text('semester', null, ['class' => 'form-control', 'placeholder' => 'Enter Semester (e.g., Fall 2025)']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <!-- Submit Button -->
                                            <div class="form-group">
                                                {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <!-- Cancel Button -->
                                            <div class="form-group">
                                                <a href="{{ route('course-units.index') }}" class="btn btn-light btn-block">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
