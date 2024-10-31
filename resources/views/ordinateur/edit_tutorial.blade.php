@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-primary">Modifier le Tutoriel</h1>
    <p class="lead text-secondary">Modifiez les détails du tutoriel ci-dessous.</p>

    <form action="{{ route('tutorials.update', $tutorial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH') <!-- Utiliser PATCH ici -->

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $tutorial->title) }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $tutorial->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">Fichier (optionnel)</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" accept=".pdf,.docx,.png,.jpg,.jpeg">
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="video_file" class="form-label">Fichier Vidéo (optionnel)</label>
            <input type="file" class="form-control @error('video_file') is-invalid @enderror" id="video_file" name="video_file" accept=".mp4,.avi,.mov,.wmv">
            @error('video_file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour le Tutoriel</button>
        <a href="{{ route('computer-tutorials') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
