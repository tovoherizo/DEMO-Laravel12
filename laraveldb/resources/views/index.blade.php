
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
   {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>  --}}
    <!-- Spinner End -->


    


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid"  src="img/carousel-1.jpg" alt="">
               
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Job That You Deserved</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job That Fit You</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Search Start -->
    <div class="container-fluid bg-success mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 20px;">
        <div class="container">
            <div class="row g-2 align-items-center">
                <div class="col-md-3">
                    <input type="text" class="form-control border-0 py-2" placeholder="Keyword" />
                </div>
                <div class="col-md-3">
                    <select class="form-select border-0 py-2">
                        <option selected>Category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select border-0 py-2">
                        <option selected>Location</option>
                        <option value="1">Location 1</option>
                        <option value="2">Location 2</option>
                        <option value="3">Location 3</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-dark w-100 py-2">Search</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Search End -->


    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container" >
            <h1 class="text-center mb-5 "  >Explore By Category</h1>
            <div class="row justify-content-center g-4" id="carte" >
                <div class="col-12 col-sm-6 col-md-4 col-lg-3  fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none " href="" >
                        <i class="fa fa-3x fa-mail-bulk text-success mb-4"></i>
                        <h6 class="mb-2 " id="text">Marketing</h6>
                        <p class="mb-0 vacancy-text ">123 Vacancy</p>
                    </a>
                 
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-headset text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Customer Service</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 fadeInUp"  >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-user-tie text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Human Resource</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-tasks text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Project Management</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-chart-line text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Business Development</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-hands-helping text-success mb-4" ></i>
                        <h6 class="mb-3" id="text">Sales & Communication</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 fadeInUp">
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-book-reader text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Teaching & Education</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 fadeInUp">
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-drafting-compass text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Design & Creative</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->


    <!-- About Start -->
    <div class="container-xxl py-5 ">
        <div class="container ">
            <div class="row g-5 d-flex align-items-center " >
                <div class="col-lg-6  fadeIn">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100" src="img/about-1.jpg" style="margin-top:10%" >
                            <p></p>
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid" src="img/about-3.jpg" style="width: 85%; " id="image">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100" src="img/about-4.jpg" id="image1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" >
                    <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p><i class="fa fa-check text-success me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-success me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-success me-3"></i>Clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-success py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Jobs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5  " >Job Listing</h1>
            <div class="tab-class text-center " >
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5" >
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
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Software Engineer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Marketing Manager</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Product Designer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Creative Director</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Wordpress Developer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success py-3 px-5" href="">Browse More Jobs</a>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Software Engineer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Marketing Manager</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Product Designer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Creative Director</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Wordpress Developer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success py-3 px-5" href="">Browse More Jobs</a>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Software Engineer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Marketing Manager</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Product Designer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Creative Director</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Wordpress Developer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-success me-2"></i>New York, USA</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-success me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-success me-2"></i>$123 - $456</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-success"></i></a>
                                        <a class="btn btn-success" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-success me-2"></i>Date Line: 01 Jan, 2045</small>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success py-3 px-5" href="">Browse More Jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jobs End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 " data-wow-delay="0.1s">
        <div class="container">
            <h1 class="text-center mb-5">Our Clients Say!!!</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Client Name</h5>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Client Name</h5>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Client Name</h5>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-success mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Client Name</h5>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection
