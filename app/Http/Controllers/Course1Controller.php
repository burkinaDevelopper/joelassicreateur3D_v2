<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Chapter1,
    Course1,
};
class Course1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $courses=Course1::with('chapter1s')->orderBy('created_at')->get();
        $data = [
            'name' => 'FORMATION V-RAY FOR SKETCHUP',
            'footer'=>'footer',
            'courses'=>$courses,
            'chapters'=>'chapter1s',
             'title'=>"Formation V-ray pour SketchUp : Guide Ultime | Joel Assi",
            'description'=>"Devenez expert en rendu 3D avec notre formation sur V-ray et SketchUp. Techniques avancées et astuces par Joel Assi, publié le 25/02/2024.",
            'keywords'=>"formation V-ray, SketchUp rendu 3D, tutoriel V-ray, apprendre SketchUp, Joel Assi 3D, guide rendu V-ray, techniques V-ray",
        ];
        return view('pages.course1', $data);
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
