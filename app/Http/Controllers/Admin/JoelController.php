<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImagePostRequest;
use App\Models\GaleryJoel;
use Str, Storage;
class JoelController extends Controller
{
     public function index()
    {
        $photos=GaleryJoel::get();
        $data = [
            'filename' => 'Ajouter une image dans galerie Joel',
            'images'=>$photos,
            'store'=>'joel-store',
            'delete'=>'joel-delete',
        ];
        return view('admin.joel', $data);
    }

     public function store(ImagePostRequest $request)
    {
        $request->validated();

        if ($request->file('filename')->isValid()) {
            $ext = $request->file('filename')->extension();
            $dataFile = Str::uuid() . '.' . $ext;
            $path = $request->file('filename')->storeAs('joel', $dataFile);
            $store = GaleryJoel::create([
                'name' =>  request('name'),
                'title' => $dataFile,
                'path' => $path,
                'url' => Storage::url($path),
            ]);
        }

        $message = "image enregistre avec success" . $store->title;
        return back()->withSuccess($message);
    }

     public function destroy(GaleryJoel $image){
        Storage::delete($image->path);
        $message=$image->name." Supprimer avec success";
        $image->delete();
        return back()->withSuccess($message);
    }
}
