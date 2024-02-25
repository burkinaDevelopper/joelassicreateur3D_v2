<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $photos=Home::get();
        $data = [
            'images'=>$photos,
            'footer'=>'footer',
            'title'=>"Maîtrisez le Rendu 3D avec V-ray, Lumion & Enscape sur SketchUp | Joel Assi",
            'description'=>"Découvrez des formations avancées en rendu 3D avec Joel Assi. Maîtrisez V-ray, Lumion, et Enscape sur SketchUp pour donner vie à vos projets en 2024.",
            'keywords'=>"rendu 3D, formation SketchUp, V-ray, Lumion, Enscape, Joel Assi, cours 3D, SketchUp avancé",
        ];
        return view("pages.accueil", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
