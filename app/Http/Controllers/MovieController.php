<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{

    public function index()
    {
         $data=[
            'movies'=>Movie::get(),
            'title'=>"Maîtrisez le Rendu 3D : Cours Vidéo avec SketchUp | Joel Assi",
            'description'=>"Découvrez nos cours vidéo pour exceller en rendu 3D avec V-ray, Lumion, et Enscape sur SketchUp. Formations guidées par Joel Assi, expert en 3D.",
            'keywords'=>"formation vidéo rendu 3D, SketchUp V-ray tutoriel, Lumion cours en ligne, Enscape guide vidéo, Joel Assi 3D, apprendre rendu 3D",
        ];
        return view("pages.movie",$data);
    }
}
