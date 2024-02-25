<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ChapterRequest;
use App\Models\{
    Chapter3,
    Course3,
};
use DB;

class Chapter3Controller extends Controller
{
     public function index(){
        $courses=Course3::with('chapter3s')->orderBy('created_at')->get();
        
        $data=[
            'lesson'=>"Ajouter un chapitre logiciel3",
            'store'=>'chapter3-store',
            'create'=>'chapter3-add',
            'courses'=>$courses,
            'chapters'=>'chapter3s',
            'add'=>'chapter3-add',
            'delete'=>'chapter3-delete',
        ];
        return view('admin.chapter3',$data);
    }

    public function store(ChapterRequest $request){
        $request->validated();
        DB::beginTransaction();
        try {
           $course=Course3::create([
            'title'=>$request->title,
           ]);
           
           $chapter=$course->chapter3s()->create([
            'chapter'=>$request->chapter
           ]);
        } catch (ValidationException $e) {
           DB::rollback();
           dd($e->getErrors());
        }
        DB::commit();

        $message="Chapitre et cours ajouter";
        return back()->withSuccess($message);
    }

    public function add(Course3 $course3){
        $course3->without('chapter3s');
       
        $data=[
            'course'=>$course3,
            'store'=>'chapter3-create',
        ];
        return view('admin.addChapter3',$data);
    }
    public function create(Course3 $course3){
     $course3->chapter3s()->create([
        'chapter'=>request('chapter'),
     ]);
     $message="Lesson ajouter";
     return back()->withSuccess($message);
    }
    public function destroy(Course3 $course3){
       $course3->delete();
        $message="Supprimer avec success";
        return back()->withSuccess($message);
    }
}
