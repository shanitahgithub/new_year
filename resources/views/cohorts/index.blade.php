@extends('layouts.app')
@section('title')
    Cohorts 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cohorts</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('cohorts.create')}}" class="btn btn-primary form-btn">Cohorts <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('cohorts.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

