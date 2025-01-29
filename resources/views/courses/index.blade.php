{{-- 


 

 @extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Course Units</h3>
    </div>
    <div class="section-body">
        <div class="row">
            @foreach ($courseUnits as $unit)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $unit['name'] }}</h5>
                            <p class="card-text">{{ $unit['description'] }}</p>
                            <a href="#" class="btn btn-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection --}}


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section-header"> 
            <h1 class="page__heading m-0">@lang('Course Units')</h1> 
           <div class="filter-container section-header-breadcrumb row justify-content-md-end">
               <a href="{{ route('course-units.index') }}" class="btn btn-primary">@lang('Back')</a>
           </div>
        {{-- <h1>Course Units</h1> --}}
        
        <a href="{{ route('course-units.create') }}" class="btn btn-primary">Add Course Unit</a>
        <div class="row mt-4">
            @foreach($courseUnits as $courseUnit)
                <div class="col-md-4">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            {{-- <i class="fas fa-book fa-2x"></i> --}}
                            <h6 class="cards">{{ $courseUnit->name }}</h6>
                            <p>{{ $courseUnit->description }}</p>
                            <h6>{{ $courseUnit->semester }}</h6>
                            <a href="{{ route('course-units.edit', $courseUnit->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('course-units.destroy', $courseUnit->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
