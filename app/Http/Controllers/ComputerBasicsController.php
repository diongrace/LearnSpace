<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;

class ComputerBasicsController extends Controller
{
    public function tutorials()
{
    $tutorials = Tutorial::all();
    return view('ordinateur.computer-tutorials', compact('tutorials'));
}

    

    public function fileManagement()
    {
        $tutorials = Tutorial::all(); // Fetch tutorials
        return view('ordinateur.file_management', compact('tutorials')); // Pass tutorials to the view
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,docx,png,jpg,jpeg|max:2048',
            'video_url' => 'nullable|url', // Valide l'URL de la vidéo
        ]);
    
        $tutorial = new Tutorial();
        $tutorial->title = $validated['title'];
        $tutorial->description = $validated['description'];
    
        if ($request->hasFile('file')) {
            $tutorial->file_path = $request->file('file')->store('tutorials', 'public');
        }
    
        $tutorial->video_url = $validated['video_url']; // Enregistre l'URL de la vidéo
    
        $tutorial->save();
    
        return redirect()->route('computer-tutorials')->with('success', 'Tutoriel créé avec succès !');
    }
    


}