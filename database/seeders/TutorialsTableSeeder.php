<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutorials')->insert([
            [
                'title' => 'Introduction à l\'ordinateur',
                'description' => 'Ce tutoriel couvre les bases de l\'utilisation d\'un ordinateur.',
                'file_path' => 'tutoriels/introduction.pdf',
                'video_url' => 'https://www.youtube.com/watch?v=example1', // Lien vers la vidéo
            ],
            [
                'title' => 'Gestion des fichiers',
                'description' => 'Apprenez à gérer vos fichiers et dossiers efficacement.',
                'file_path' => 'tutoriels/gestion_des_fichiers.pdf',
                'video_url' => 'https://www.youtube.com/watch?v=example2', // Lien vers la vidéo
            ],
            [
                'title' => 'Introduction à l\'ordinateur',
                'description' => 'Ce tutoriel couvre les bases de l\'utilisation d\'un ordinateur.',
                'file_path' => 'tutorials/introduction.pdf',
            ],
            [
                'title' => 'Gestion des fichiers',
                'description' => 'Apprenez à gérer vos fichiers et dossiers efficacement.',
                'file_path' => 'tutorials/gestion_des_fichiers.pdf',
            ],
            // Ajoutez d'autres tutoriels ici
        ]);
    }
}
