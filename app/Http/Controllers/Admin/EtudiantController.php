<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImagePostRequest;
use App\Models\GaleryEtudiant;
use Str, Storage;
class EtudiantController extends Controller
{
      public function index()
    {
        $photos=GaleryEtudiant::get();
        $data = [
            'filename' => 'Ajouter une image dans galerie Etudiant',
            'images'=>$photos,
            'store'=>'etudiant-store',
            'delete'=>'etudiant-delete',
        ];
        return view('admin.etudiant', $data);
    }

     public function store(ImagePostRequest $request)
    {
        $request->validated();

        if ($request->file('filename')->isValid()) {
            $ext = $request->file('filename')->extension();
            $dataFile = Str::uuid() . '.' . $ext;
            $path = $request->file('filename')->storeAs('etudiant', $dataFile);
            $store = GaleryEtudiant::create([
                'name' =>  request('name'),
                'title' => $dataFile,
                'path' => $path,
                'url' => Storage::url($path),
            ]);
        }

        $message = "image enregistre avec success" . $store->title;
        return back()->withSuccess($message);
    }

     public function destroy(GaleryEtudiant $image){
        Storage::delete($image->path);
        $message=$image->name." Supprimer avec success";
        $image->delete();
        return back()->withSuccess($message);
    }
}
