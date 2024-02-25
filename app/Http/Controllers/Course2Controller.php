<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Chapter2,
    Course2,
};
class Course2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $courses=Course2::with('chapter2s')->orderBy('created_at')->get();
        $data = [
            'name' => 'FORMATION LUMION ET SKETCHUP',
            'footer'=>'footer',
            'courses'=>$courses,
            'chapters'=>'chapter2s',
             'title'=>"Formation Lumion & SketchUp: Devenez Pro du Rendu 3D | Joel Assi",
            'description'=>"Apprenez à maîtriser Lumion et SketchUp pour un rendu 3D époustouflant. Cours complet par Joel Assi, expert en visualisation 3D. Publié le 25/02/2024.",
            'keywords'=>"Lumion formation, SketchUp rendu 3D, Joel Assi cours, visualisation 3D, apprendre Lumion, SketchUp guide, techniques rendu 3D",
        ];
        return view('pages.course2', $data);
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
