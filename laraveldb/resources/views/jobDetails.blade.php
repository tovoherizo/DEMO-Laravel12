@extends('layouts.app')

    @section('title', 'Accueil')
    
    @section('content')
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="container-xxl bg-white p-0">
       


        


        <!-- Header End -->
        
        <div class="container-fluid p-0 position-relative ">
            
            <div class="container-fluid m-0 p-0 position-relative ">
                <img class="img-fluid"  src="img/carousel-1.jpg" alt="">
               <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <h1 class="display-3 text-white  fw-bold fs-1">Job Detail</h1>
                <nav >
                    <ol class="breadcrumb text-uppercase" >
                        <li class="breadcrumb-item  " ><a href="/" style="color: green">Home</a></li>
                        <li class="breadcrumb-item  " ><a href="#" style="color: green">Pages</a></li>
                        <li class="breadcrumb-item text-white active " aria-current="page">Job Detail</li>
                    </ol>
                </nav>
                </div>
               </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Job Detail Start -->
        <div class="container-fluid py-5 " >
            <div class="container">
                <div class="row g-5 ">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('storage/' . $job->image) }}" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">{{$job->titre}}</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>{{$job->location}}</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>{{$job->contrat}}</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>{{$job->salary_min}}-{{$job->salary_max}}</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>{{$job->description}}</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <p>{{$job->responsability}}</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-success me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                                <li><i class="fa fa-angle-right text-success me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                                <li><i class="fa fa-angle-right text-success me-2"></i>Rebum vero dolores dolores elitr</li>
                                <li><i class="fa fa-angle-right text-success me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                                <li><i class="fa fa-angle-right text-success me-2"></i>Diam diam stet erat no est est</li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                            <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-success me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                                <li><i class="fa fa-angle-right text-success me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                                <li><i class="fa fa-angle-right text-success me-2"></i>Rebum vero dolores dolores elitr</li>
                                <li><i class="fa fa-angle-right text-success me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                                <li><i class="fa fa-angle-right text-success me-2"></i>Diam diam stet erat no est est</li>
                            </ul>
                        </div>
        
                        <div class="container">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form method="POST"  action="{{ route('Post.store', ['id' => $job->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    
                                    <div class="col-12 col-sm-6">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="porfolio" id="porfolio" class="form-control" placeholder="Portfolio Website">
                                        @error('porfolio')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                   
                                  
                                    <div class="col-12 col-sm-6">
                                        <input type="file" name="document" id="document" class="form-control bg-white">
                                        @error('document')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    
                                    <div class="col-12">
                                        <textarea class="form-control" name="coverletter" id="coverletter" rows="5" placeholder="Coverletter"></textarea>
                                        @error('coverletter')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-success w-100" type="submit">Postuler</button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Published On: {{$job->created_at}}</p>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Vacancy: 123 Position</p>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Job Nature: {{$job->contrat}}</p>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Salary: $ {{$job->salary_min}} - {{$job->salary_max}}</p>
                            <p><i class="fa fa-angle-right text-success me-2"></i>Location: {{$job->location}}A</p>
                            <p class="m-0"><i class="fa fa-angle-right text-success me-2"></i>Date Line: {{$job->date_limit}}</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">{{$job->detail_entreprise}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


       


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @endsection