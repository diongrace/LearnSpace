<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;
use Illuminate\Support\Facades\Storage;

class ComputerBasicsController extends Controller
{
    public function tutorials()
    {
        $tutorials = Tutorial::all();
        return view('ordinateur.computer-tutorials', compact('tutorials'));
    }

    public function fileManagement()
    {
        $tutorials = Tutorial::all();
        return view('ordinateur.file_management', compact('tutorials'));
    }

    public function store(Request $request)
    {
        // Validation des fichiers
        $request->validate([
            'file' => 'nullable|file|mimes:pdf,docx,png,jpg,jpeg|max:2048',
            'video_file' => 'nullable|file|mimes:mp4,avi,mov,wmv|max:20480',
        ]);
    
        // Gérer le fichier document
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('file'); // Stocker dans le dossier 'file'
        }
    
        // Gérer le fichier vidéo
        if ($request->hasFile('video_file')) {
            $videoPath = $request->file('video_file')->store('computer'); // Stocker dans le dossier 'computer'
        }
    
        // Créer un nouveau tutoriel (par exemple)
        $tutorial = new Tutorial();
        $tutorial->title = $request->title;
        $tutorial->description = $request->description;
        $tutorial->file_path = $filePath ?? null; // Stocker le chemin du fichier
        $tutorial->video_path = $videoPath ?? null; // Stocker le chemin de la vidéo
        $tutorial->save();
    
        return redirect()->route('computer-tutorials')->with('success', 'Tutoriel ajouté avec succès.');
    }
    
    public function edit($id)
    {
        $tutorial = Tutorial::findOrFail($id); // Récupère le tutoriel par ID
        return view('ordinateur.edit_tutorial', compact('tutorial'));
    }
    
    public function update(Request $request, Tutorial $tutorial)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,docx,png,jpg,jpeg',
            'video_file' => 'nullable|file|mimes:mp4,avi,mov,wmv',
        ]);
    
        // Mettez à jour les détails du tutoriel ici
        $tutorial->title = $request->title;
        $tutorial->description = $request->description;
    
        // Traitez le fichier si nécessaire...
    
        $tutorial->save();
    
        return redirect()->route('computer-tutorials')->with('success', 'Le tutoriel a été mis à jour avec succès.');
    }
    public function destroy($id)
    {
        // Trouver le tutoriel par ID
        $tutorial = Tutorial::findOrFail($id);
        
        // Supprimer le tutoriel
        $tutorial->delete();

        // Rediriger avec un message de succès
        return redirect()->route('computer-tutorials')->with('success', 'Le tutoriel a été supprimé avec succès.');
    }
    
    
}
