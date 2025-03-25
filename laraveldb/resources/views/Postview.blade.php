@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.navdashboard')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Liste des Produits</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>titre</th>
                                <th>contrat</th>
                                <th>Salary</th>
                                <th>Date Line: </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <tr>
                               
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td>
                                    <button class="btn btn-warning btn-sm"  > <a href="{{ route('offreedit.view', $job->id) }}" style="text-decoration:none;color:white">Modifier</a></button>
                                    <form action="{{ route('offre.destroy', $job->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')">
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
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