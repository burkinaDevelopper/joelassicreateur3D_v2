<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImagePostRequest;
use App\Models\Home;
use Str, Storage;

class AccueilController extends Controller
{
    public function index()
    {
        $photos=Home::get();
        $data = [
            'filename' => 'Ajouter une image dans accueil',
            'images'=>$photos,
            'store'=>'accueil-store',
            'delete'=>'accueil-delete',
        ];
        return view('admin.accueil', $data);
    }
    public function store(ImagePostRequest $request)
    {
        $request->validated();

        if ($request->file('filename')->isValid()) {
            $ext = $request->file('filename')->extension();
            $dataFile = Str::uuid() . '.' . $ext;
            $path = $request->file('filename')->storeAs('home', $dataFile);
            $store = Home::create([
                'name' =>  request('name'),
                'title' => $dataFile,
                'path' => $path,
                'url' => Storage::url($path),
            ]);
        }

        $message = "image enregistre avec success" . $store->title;
        return back()->withSuccess($message);
    }
    public function destroy(Home $image){
        Storage::delete($image->path);
        $message=$image->name." Supprimer avec success";
        $image->delete();
        return back()->withSuccess($message);
    }
}
