@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.navdashboard')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            
            <h4>hello admin</h4>
        </main>
    </div>
</div>
@endsection
