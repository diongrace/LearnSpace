@extends('layouts.admin')

@section('header', 'Modifier la Vidéo')

@section('content')
    <form action="{{ route('videos.update', $video) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700">Titre</label>
            <input type="text" name="title" id="title" value="{{ $video->title }}" class="w-full mt-2 p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full mt-2 p-2 border rounded">{{ $video->description }}</textarea>
        </div>

        <div class="mb-4">
            <label for="video_url" class="block text-gray-700">Lien Vidéo</label>
            <input type="url" name="video_url" id="video_url" value="{{ $video->video_url }}" class="w-full mt-2 p-2 border rounded" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
@endsection
