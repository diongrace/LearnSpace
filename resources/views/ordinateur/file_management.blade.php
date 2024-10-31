@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Titre principal et description -->
    <div class="text-center mb-5">
        <h1 class="display-5 text-primary">Tutoriels de Manipulation d'Ordinateur</h1>
        <p class="text-secondary">Apprenez les bases de l’utilisation d’un ordinateur avec ces tutoriels conçus pour les débutants.</p>
    </div>
    
    <div class="row">
        @foreach ($tutorials as $tutorial)
            <!-- Vérification si le fichier est un PDF -->
            @if ($tutorial->file_path && Str::endsWith($tutorial->file_path, '.pdf'))
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm h-100 border-0" style="border-radius: 12px; background-color: #f7f9fc;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary">{{ $tutorial->title }}</h5>
                            <p class="card-text text-secondary">{{ Str::limit($tutorial->description, 100, '...') }}</p>
                            
                            <!-- Video Display -->
                            @if ($tutorial->video_url)
                                <div class="video-container mb-3">
                                    <iframe width="100%" height="200" src="{{ $tutorial->video_url }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            @endif

                            <!-- Bouton de téléchargement pour les fichiers PDF -->
                            <a href="{{ asset('storage/' . $tutorial->file_path) }}" class="btn btn-outline-primary mt-auto" download>
                                Télécharger le fichier PDF
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
