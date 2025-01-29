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
@endsection
