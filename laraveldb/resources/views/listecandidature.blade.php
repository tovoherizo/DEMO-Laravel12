@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.navdashboard')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Liste des candidatures</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>email</th>
                                <th>Date: </th>
                                <th>porfolio</th>
                                <th>Details</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                               
                                <td>{{$post->name}}</td>
                                <td>{{$post->email}}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->porfolio}}</td>
                                <td> <a class="btn btn-success" href="{{ route('Post', $post->id) }}">view</a></td>
                               
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>


@endsection