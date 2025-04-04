@extends('layouts.app')

    @section('title', 'Accueil')
    
    @section('content')
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
       
        <!-- Spinner End -->


      


        <!-- Header End -->
       
        <div class="container-fluid p-0 position-relative ">
            
            <div class="container-fluid m-0 p-0 position-relative ">
                <img class="img-fluid"  src="img/carousel-1.jpg" alt="">
               <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <h1 class="display-3 text-white  fw-bold fs-1">Job List</h1>
                <nav >
                    <ol class="breadcrumb text-uppercase" >
                        <li class="breadcrumb-item  " ><a href="/" style="color: green">Home</a></li>
                        <li class="breadcrumb-item  " ><a href="#" style="color: green">Pages</a></li>
                        <li class="breadcrumb-item text-white active " aria-current="page">Job List</li>
                    </ol>
                </nav>
                </div>
               </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            
                            @foreach ($jobs as $job)
                            <div class="job-item p-4 mb-4">  <!-- 🛠️ Chaque job a sa propre carte -->
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('storage/' . $job->image) }}" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">{{ $job->titre }}</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>{{ $job->location }}</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>{{ $job->contrat }}</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>${{ $job->salary_min }} - {{$job->salary_max}}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                            <a class="btn btn-success" href="{{ route('jobs.show', $job->id) }}">view</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: {{ $job->date_limit }}</small>
                                    </div>
                                </div>   
                            </div>
                            @endforeach
        
                            <a class="btn btn-success py-3 px-5" href="">Browse More Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->


        


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @endsection