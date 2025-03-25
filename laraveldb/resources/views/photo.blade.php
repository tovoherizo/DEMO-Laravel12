@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.navdashboard')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container">
                <div class="photo-container mt-4">
                    <h2 class="text-center mb-4">My Photo Album</h2>
                    
                    <div class="photo-grid">
                        <div class="row">
                            <!-- Row 1 -->
                           
                            @foreach ($jobs as $job)
                            <div class="col-6 col-md-3 col-lg-2 photo-item">
                                <img src="{{ asset('storage/' . $job->image) }}" alt="Photo 1">
                            </div>
                            @endforeach
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection