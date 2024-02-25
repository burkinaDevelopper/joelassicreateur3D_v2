<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ChapterRequest;
use App\Models\{
    Chapter2,
    Course2,
};
use DB;
class Chapter2Controller extends Controller
{
    public function index(){
        $courses=Course2::with('chapter2s')->orderBy('created_at')->get();
        $data=[
            'lesson'=>"Ajouter un chapitre logiciel2",
            'store'=>'chapter2-store',
            'create'=>'chapter2-add',
            'courses'=>$courses,
            'chapters'=>'chapter2s',
            'add'=>'chapter2-add',
            'delete'=>'chapter2-delete',
        ];
        return view('admin.chapter2',$data);
    }

    public function store(ChapterRequest $request){
        $request->validated();
        DB::beginTransaction();
        try {
           $course=Course2::create([
            'title'=>$request->title,
           ]);
           
           $chapter=$course->chapter2s()->create([
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

    public function add(Course2 $course2){
        $course2->without('chapter2s');
       
        $data=[
            'course'=>$course2,
            'store'=>'chapter2-create',
        ];
        return view('admin.addChapter2',$data);
    }
    public function create(Course2 $course2){
     $course2->chapter2s()->create([
        'chapter'=>request('chapter'),
     ]);
     $message="Lesson ajouter";
     return back()->withSuccess($message);
    }
    public function destroy(Course2 $course2){
       $course2->delete();
        $message="Supprimer avec success";
        return back()->withSuccess($message);
    }
}
