@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Titre principal et description -->
    <div class="text-center mb-5">
        <h1 class="display-5 text-primary">Tutoriels de Manipulation d'Ordinateur</h1>
        <p class="text-secondary">Apprenez les bases de l’utilisation d’un ordinateur avec ces tutoriels conçus pour les débutants.</p>
    </div>
    
    <div class="row">
        <!-- Affichage de chaque tutoriel sous forme de carte -->
        @foreach ($tutorials as $tutorial)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm h-100 border-0" style="border-radius: 12px; background-color: #f7f9fc;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">{{ $tutorial->title }}</h5>
                        <p class="card-text text-secondary">{{ Str::limit($tutorial->description, 100, '...') }}</p>
                        
                        @if ($tutorial->file_path)
                            <a href="{{ asset('storage/' . $tutorial->file_path) }}" class="btn btn-outline-primary mt-auto" download>
                                Télécharger le fichier
                            </a>
                        @else
                            <span class="text-muted mt-auto">Aucun fichier à télécharger</span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
