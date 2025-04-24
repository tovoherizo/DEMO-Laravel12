@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.navdashboard')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
             <div class="container-fluid py-5 " >
            <div class="container">
                <div class="row g-5 ">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            
                            <div class="text-start ps-4">
                                <h3 class=" mb-3"> {{$posts->name}}</h3>
                                <span class="text-truncate me-3"><i class="fa fa-envelope text-success me-2"></i>{{$posts->email}}</span>
                                <span class="text-truncate me-3"><i class="fa fa-link text-success me-2"></i>{{ $posts->porfolio}}</span>
                                
                                
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Document</h4>
                            <div class="container d-flex">
                                <p class="me-3">{{$posts->document}}</p>
                                <a href="{{ asset('storage/' . $posts->document) }}" target="_blank">Ouvrir le document</a>
                            </div>
                           
                            <h4 class="mb-3">Coverletter</h4>
                            <p>{{$posts->coverletter}}</p>
                            
    
                        </div>
        
                        
                    </div>
        
                  
                </div>
            </div>
        </div>
        </main>
    </div>
</div>


@endsection