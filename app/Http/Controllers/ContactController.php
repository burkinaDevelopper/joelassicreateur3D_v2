<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data=[
            'footer'=>'footer',
            'title'=>"Contactez-nous pour vos formations en Rendu 3D | Joel Assi",
            'description'=>"Besoin d'aide ou de renseignements sur nos formations en rendu 3D avec Enscape, V-ray ou Lumion sur SketchUp ? Contactez Joel Assi, expert en 3D. Publié le 25/02/2024.",
            'keywords'=>"contact formation 3D, Enscape SketchUp, V-ray contact, Lumion SketchUp, support formation, assistance Joel Assi",
        ];
        return view('pages.contact', $data);
    }
}
