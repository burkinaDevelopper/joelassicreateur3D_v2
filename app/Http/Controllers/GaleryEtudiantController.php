<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleryEtudiant;
class GaleryEtudiantController extends Controller
{
    public function index()
    {
         $data=[
            'images'=>GaleryEtudiant::get(),
             'title'=>"Galerie Étudiant : Talents en Rendu 3D avec SketchUp | Joel Assi",
            'description'=>"Découvrez les talents émergents en rendu 3D dans la Galerie Étudiant de Joel Assi. Projets exceptionnels avec V-ray, Lumion, et Enscape sur SketchUp.",
            'keywords'=>"étudiant rendu 3D, galerie SketchUp, formation V-ray, Lumion créatif, Enscape 3D, portfolio étudiant, Joel Assi",
        ];
        return view('pages.galeriEtudiant', $data);
    }
}
