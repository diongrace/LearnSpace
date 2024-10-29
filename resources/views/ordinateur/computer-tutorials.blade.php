@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Section Header -->
    <div class="text-center mb-5">
        <h1 class="text-primary">Tutoriels de Manipulation d'Ordinateur</h1>
        <p class="lead text-secondary">Apprenez les bases de l’utilisation d’un ordinateur avec ces tutoriels conçus pour les débutants.</p>
    </div>
    
    <!-- Tutorials Grid -->
    <div class="row">
        @foreach ($tutorials as $tutorial)
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm" style="border-radius: 10px;">
                    <div class="card-body d-flex flex-column">
                        <!-- Title -->
                        <h5 class="card-title text-primary font-weight-bold">{{ $tutorial->title }}</h5>
                        
                        <!-- Description -->
                        <p class="card-text text-secondary">{{ Str::limit($tutorial->description, 100) }}</p>
                        
                        <!-- Download Button -->
                        @if ($tutorial->file_path)
                            <a href="{{ asset('storage/' . $tutorial->file_path) }}" class="btn btn-outline-primary mt-auto" download>
                                <i class="fas fa-download"></i> Télécharger le fichier
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
