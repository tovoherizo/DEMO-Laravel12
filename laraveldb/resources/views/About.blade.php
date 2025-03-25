
  

    @extends('layouts.app')

    @section('title', 'Accueil')
    
    @section('content')
    <div class="container-xxl bg-white p-0">
       

       


        <!-- Header End -->
        <div class="container-fluid p-0 position-relative ">
            
            <div class="container-fluid m-0 p-0 position-relative ">
                <img class="img-fluid"  src="img/carousel-1.jpg" alt="">
               <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <h1 class="display-3 text-white  fw-bold fs-1">About Us</h1>
                <nav >
                    <ol class="breadcrumb text-uppercase" >
                        <li class="breadcrumb-item  " ><a href="/" style="color: green">Home</a></li>
                        <li class="breadcrumb-item  " ><a href="#" style="color: green">Pages</a></li>
                        <li class="breadcrumb-item text-white active " aria-current="page">About</li>
                    </ol>
                </nav>
                </div>
               </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 " >
                        <div class="row g-0 ">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                                
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
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


      


       <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @endsection
    