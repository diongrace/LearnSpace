@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="border-radius: 15px; background-color: #f7f9fc; max-width: 500px; width: 100%;">
        <h2 class="text-center text-primary mb-4">Ajouter un Tutoriel</h2>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <form action="{{ route('create.store') }}" method="POST">
            @csrf
            <!-- Titre -->
            <div class="mb-3">
                <label for="title" class="form-label text-secondary">Titre</label>
                <input type="text" class="form-control border-primary rounded-pill px-3" id="title" name="title" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label text-secondary">Description</label>
                <textarea class="form-control border-primary rounded px-3" id="description" name="description" rows="3"></textarea>
            </div>

            <!-- Chemin du fichier -->
            <div class="mb-3">
                <label for="file_path" class="form-label text-secondary">Chemin du Fichier (si applicable)</label>
                <input type="text" class="form-control border-primary rounded-pill px-3" id="file_path" name="file_path">
            </div>

            <!-- Bouton d'ajout -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection
