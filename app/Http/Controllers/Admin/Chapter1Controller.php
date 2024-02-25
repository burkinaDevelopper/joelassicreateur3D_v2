<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ChapterRequest;
use App\Models\{
    Chapter1,
    Course1,
};
use DB;
class Chapter1Controller extends Controller
{
    public function index(){
        $courses=Course1::with('chapter1s')->orderBy('created_at')->get();
        
        $data=[
            'lesson'=>"Ajouter un chapitre logiciel1",
            'store'=>'chapter1-store',
            'create'=>'chapter1-add',
            'courses'=>$courses,
            'chapters'=>'chapter1s',
            'add'=>'chapter1-add',
            'delete'=>'chapter1-delete',
        ];
        return view('admin.chapter1',$data);
    }

    public function store(ChapterRequest $request){
        $request->validated();
        DB::beginTransaction();
        try {
           $course=Course1::create([
            'title'=>$request->title,
           ]);
           
           $chapter=$course->chapter1s()->create([
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

    public function add(Course1 $course1){
        $course1->without('chapter1s');
       
        $data=[
            'course'=>$course1,
            'store'=>'chapter1-create',
        ];
        return view('admin.addChapter1',$data);
    }
    public function create(Course1 $course1){
     $course1->chapter1s()->create([
        'chapter'=>request('chapter'),
     ]);
     $message="Lesson ajouter";
     return back()->withSuccess($message);
    }
    public function destroy(Course1 $course1){
       $course1->delete();
        $message="Supprimer avec success";
        return back()->withSuccess($message);
    }
}
