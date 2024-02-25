<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Chapter3,
    Course3,
};
class Course3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course3::with('chapter3s')->orderBy('created_at')->get();
        $data = [
            'name' => 'FORMATION ENSCAPE ET SKETCHUP',
            'footer'=>'footer',
            'courses'=>$courses,
            'chapters'=>'chapter3s',
             'title'=>"Maîtrisez Enscape et SketchUp pour un Rendu 3D Réaliste | Joel Assi",
            'description'=>"Découvrez comment utiliser Enscape avec SketchUp pour créer des rendus 3D bluffants. Formation signée Joel   Assi, expert 3D. Mise à jour le 25/02/2024.",
            'keywords'=>"Enscape SketchUp, rendu 3D réaliste, formation 3D, Joel Assi, cours Enscape, tutoriel SketchUp, visualisation architecturale",
        ];
        return view('pages.course3', $data);
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
