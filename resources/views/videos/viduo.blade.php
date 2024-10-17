@extends('layouts.admin')

@section('header', 'Vidéos de Cours')

@section('content')
    <div class="flex justify-between mb-4">
        <h3 class="text-xl font-bold">Liste des Vidéos</h3>
        <a href="{{ route('videos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter Vidéo</a>
    </div>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Titre</th>
                <th class="py-2 px-4 border-b">Description</th>
                <th class="py-2 px-4 border-b">Lien Vidéo</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($videos) && $videos->isEmpty()) <!-- Vérifiez si $videos est défini -->
                <tr>
                    <td colspan="4" class="text-center py-4">Aucune vidéo disponible.</td>
                </tr>
            @else
                @foreach($videos as $video)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $video->title }}</td>
                        <td class="py-2 px-4 border-b">{{ $video->description }}</td>
                        <td class="py-2 px-4 border-b"><a href="{{ $video->video_url }}" target="_blank" class="text-blue-500">Voir</a></td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('videos.edit', $video) }}" class="text-yellow-500">Modifier</a> |
                            <form action="{{ route('videos.destroy', $video) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
