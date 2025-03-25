@extends('layouts.app')

@section('title', 'Publier une offre')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.navdashboard')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <form method="POST" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
                    @csrf

                    <h1 class="text-center" id="publier">Publier une offre</h1>

                    <div class="mb-4">
                        <label for="formFile" class="form-label fw-bold">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="formFile" name="image">
                        @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="titre" class="form-label fw-bold">Titre</label>
                        <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" required value="{{ old('titre') }}">
                        @error('titre') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold">Catégorie</label>
                        <select class="form-select @error('category') is-invalid @enderror" id="category" name="category" required>
                            <option selected disabled>Choisir une catégorie...</option>
                            <option value="informatique">Informatique</option>
                            <option value="marketing">Marketing</option>
                            <option value="finance">Finance</option>
                            <option value="Commerce">Commerce</option>
                            <option value="administration">Administration</option>
                            <option value="autre">Autre</option>
                        </select>
                        @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label fw-bold">Location</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" required value="{{ old('location') }}">
                        @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label fw-bold">Salaire</label>
                        <div class="input-group">
                            <span class="input-group-text">€</span>
                            <input type="number" class="form-control @error('salary_min') is-invalid @enderror" id="salary_min" name="salary_min" placeholder="Min" value="{{ old('salary_min') }}">
                            <span class="input-group-text">-</span>
                            <input type="number" class="form-control @error('salary_max') is-invalid @enderror" id="salary_max" name="salary_max" placeholder="Max" value="{{ old('salary_max') }}">
                        </div>
                        @error('salary_min') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        @error('salary_max') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="contrat" class="form-label fw-bold">Contrat</label>
                        <select class="form-select @error('contrat') is-invalid @enderror" id="contrat" name="contrat" required>
                            <option selected disabled>Choisir...</option>
                            <option value="CDI">CDI</option>
                            <option value="CDI">CDD</option>
                            <option value="interim">Intérim</option>
                            <option value="stage">Stage</option>
                            <option value="alternance">Alternance</option>
                            <option value="freelance">Freelance</option>
                        </select>
                        @error('contrat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="date_limit" class="form-label fw-bold">Date limite</label>
                        <input type="date" class="form-control @error('date_limit') is-invalid @enderror" id="date_limit" name="date_limit" required value="{{ old('date_limit') }}">
                        @error('date_limit') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="responsability" class="form-label fw-bold">Responsabilités</label>
                        <textarea class="form-control @error('responsability') is-invalid @enderror" id="responsability" name="responsability" rows="5">{{ old('responsability') }}</textarea>
                        <small class="text-muted">Utilisez des tirets pour lister les responsabilités</small>
                        @error('responsability') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="qualification" class="form-label fw-bold">Qualifications</label>
                        <textarea class="form-control @error('qualification') is-invalid @enderror" id="qualification" name="qualification" rows="5">{{ old('qualification') }}</textarea>
                        <small class="text-muted">Utilisez des tirets pour lister les qualifications requises</small>
                        @error('qualification') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="detail_entreprise" class="form-label fw-bold">Détails de l'entreprise</label>
                        <textarea class="form-control @error('detail_entreprise') is-invalid @enderror" id="detail_entreprise" name="detail_entreprise" rows="5">{{ old('detail_entreprise') }}</textarea>
                        @error('detail_entreprise') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="reset" class="btn btn-secondary me-md-2">Réinitialiser</button>
                        <button type="submit" class="btn btn-primary">Publier l'offre</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection
