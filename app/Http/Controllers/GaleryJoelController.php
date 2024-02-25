<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleryJoel;
class GaleryJoelController extends Controller
{
    public function index()
    {
        $data=[
            'images'=>GaleryJoel::get(),
             'title'=>"Galerie Joel : Chefs-d'Œuvre de Rendu 3D avec SketchUp | Joel Assi",
            'description'=>"Plongez dans la Galerie Joel pour explorer des créations époustouflantes en rendu 3D. V-ray, Lumion & Enscape avec SketchUp par Joel Assi, publié en 2024.",
            'keywords'=>"galerie rendu 3D, Joel Assi, SketchUp, V-ray formation, Lumion projets, Enscape visualisation, portfolio 3D",
        ];
        return view('pages.galeriJoel', $data);
    }
}
