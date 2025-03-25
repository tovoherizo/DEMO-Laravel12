@extends ('layouts.app')
@section('title', 'Accueil')
@section('content')

<div class="container-xxl bg-white p-0">
   


    <!-- Header End -->
   
    <div class="container-fluid p-0 position-relative ">
            
        <div class="container-fluid m-0 p-0 position-relative ">
            <img class="img-fluid"  src="img/carousel-1.jpg" alt="">
           <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <h1 class="display-3 text-white  fw-bold fs-1">Category</h1>
            <nav >
                <ol class="breadcrumb text-uppercase" >
                    <li class="breadcrumb-item  fw-bold " ><a href="/" style="color: green">Home</a></li>
                    <li class="breadcrumb-item fw-bold  " ><a href="#" style="color: green">Pages</a></li>
                    <li class="breadcrumb-item text-white active fw-bold " aria-current="page">Category</li>
                </ol>
            </nav>
            </div>
           </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" >Explore By Category</h1>
            <div class="row g-4" id="carte">
                <div class="col-sm-3  fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-mail-bulk text-success mb-4"></i>
                        <h6 class="mb-3 " id="text" >Marketing</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-sm-3  fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-headset text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Customer Service</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-sm-3  fadeInUp">
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-user-tie text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Human Resource</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-sm-3  fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-tasks text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Project Management</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-sm-3  fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-chart-line text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Business Development</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-sm-3  fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-hands-helping text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Sales & Communication</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-sm-3  fadeInUp" >
                    <a class="cat-item rounded p-4 text-decoration-none" href="">
                        <i class="fa fa-3x fa-book-reader text-success mb-4"></i>
                        <h6 class="mb-3" id="text">Teaching & Education</h6>
                        <p class="mb-0 vacancy-text">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-sm-3 fadeInUp" >
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





    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection