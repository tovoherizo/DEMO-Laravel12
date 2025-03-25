@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<div class="container-fluid">
    <div class="row">
        @include('components.navdashboard')
            
      
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container">
                <h4 class="mb-3 text-center">Public profile</h4>
                <div class="text-center">
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="Photo de profil" class="profile-pic mb-3" >
                
                    <!-- Bouton pour ouvrir la modal -->
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#imageModal">
                        Change Picture
                    </button>
                
                    <!-- MODAL -->
                    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg"> 
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mb-3 text-center" id="imageModalLabel">Modifier la photo de profil</h5>
                                    
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    
                                </div>
                               
                                <div class="modal-body text-center">
                                    <!-- Aperçu de l'image à rogner -->
                                    <div style="width:100%; max-height: 400px; overflow: hidden;">
                                        <img id="imageCropper" class="img-fluid">
                                    </div>
                                    
                                    <!-- Input pour uploader l'image -->
                                    <input type="file" id="imageInput" name="image" class="form-control mt-3" accept="image/*" required>
                
                                    <!-- Bouton pour valider le recadrage -->
                                    <button type="button" id="cropButton" class="btn btn-primary mt-3">Enregistrer</button>
                
                                    <!-- Formulaire caché pour envoyer l'image -->
                                    <form id="uploadForm" action="{{ route('profile.update-image') }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="cropped_image" id="croppedImageData">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <label class="form-label">First name</label>
                    <input type="text" class="form-control" value="{{$user ->name}}" readonly>
                    
                    <label class="form-label mt-3">Last name</label>
                    <input type="text" class="form-control" value="{{$user ->last_name}}" readonly>
                    
                    <label class="form-label mt-3">Location</label>
                    <input type="text" class="form-control" value="{{$user ->location}}" readonly>
                    
                    <label class="form-label mt-3">email</label>
                    <input type="text" class="form-control" value="{{$user ->email}}" readonly>
                    
                    <label class="form-label mt-3">Bio</label>
                    <textarea class="form-control" rows="3" readonly>{{$user ->bio}}</textarea>
                    
                    <div class="d-flex justify-content-center">
                        <button  type="button" class="btn btn-success mt-2 w-50 " onclick="window.location.href='{{ route('profile.edit') }}'"> Edit </button>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>

@endsection


