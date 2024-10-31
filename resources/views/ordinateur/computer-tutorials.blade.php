@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="text-primary">Tutoriels de Manipulation d'Ordinateur</h1>
        <p class="lead text-secondary">Apprenez les bases de l’utilisation d’un ordinateur avec ces tutoriels conçus pour les débutants.</p>
    </div>

    <div class="row">
        @foreach ($tutorials as $tutorial)
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm" style="border-radius: 10px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary font-weight-bold">{{ $tutorial->title }}</h5>
                        <p class="card-text text-secondary">{{ Str::limit($tutorial->description, 100) }}</p>

                        @if ($tutorial->video_url)
                            <div class="video-container mb-3">
                                <iframe width="100%" height="200" src="{{ $tutorial->video_url }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        @endif

                        @if ($tutorial->file_path)
                            <a href="{{ asset('storage/' . $tutorial->file_path) }}" class="btn btn-outline-primary mt-auto" download>
                                <i class="fas fa-download"></i> Télécharger le fichier
                            </a>
                        @endif

                        <div class="mt-3">
                            <a href="{{ route('tutorials.edit', $tutorial->id) }}" class="btn btn-warning">
                                Éditer
                            </a>
                            <form action="{{ route('tutorials.destroy', $tutorial->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce tutoriel ?')">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
