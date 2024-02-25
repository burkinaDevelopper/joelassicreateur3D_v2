<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MoviePostRequest;
use App\Models\Movie;
use Str, Storage;
class MoviesController extends Controller
{
    public function index()
    {
        $photos=Movie::get();
        $data = [
            'filename' => 'Ajouter une video',
            'images'=>$photos,
            'store'=>'movies-store',
            'delete'=>'movies-delete',
        ];
        return view('admin.movies', $data);
    }
      public function store(MoviePostRequest $request)
    {
        $request->validated();

        if ($request->file('filename')->isValid()) {

            $ext = $request->file('filename')->extension();
            $dataFile = Str::uuid() . '.' . $ext;
            $path = $request->file('filename')->storeAs('movie', $dataFile);
            $store = Movie::create([
                'name' =>  request('name'),
                'title' => $dataFile,
                'path' => $path,
                'url' => Storage::url($path),
            ]);
        }

        $message = "video enregistre avec success" . $store->title;
        return back()->withSuccess($message);
    }
    public function destroy(Movie $movie){
        Storage::delete($movie->path);
        $message=$movie->name." Supprimer avec success";
        $movie->delete();
        return back()->withSuccess($message);
    }
}
