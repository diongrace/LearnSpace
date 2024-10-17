<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all(); // Récupère toutes les vidéos de la base de données
    
        return view('videos.video', compact('videos')); // Passe la variable à la vue
    }
    
    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'required|url',
        ]);

        Video::create($request->all());  // Créer une nouvelle vidéo

        return redirect()->route('videos.video')->with('success', 'Vidéo ajoutée avec succès.');
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'required|url',
        ]);

        $video->update($request->all());  // Mettre à jour les infos de la vidéo

        return redirect()->route('videos.video')->with('success', 'Vidéo mise à jour avec succès.');
    }

    public function destroy(Video $video)
    {
        $video->delete();  // Supprimer la vidéo

        return redirect()->route('videos.video')->with('success', 'Vidéo supprimée avec succès.');
    }
}
