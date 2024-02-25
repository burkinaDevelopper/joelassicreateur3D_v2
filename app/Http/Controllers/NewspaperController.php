<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Newspaper,
    User,
};
use Str;
use App\Notifications\AdminNotification;
use App\Notifications\NewspaperNotification;

class NewspaperController extends Controller
{
     public function store(){
        request()->validate([
            'email'=>['required','unique:newspapers,email'],
        ]);
        $token=Str::uuid();
        $subscript=Newspaper::create([
            'email'=>request('email'),
            'token'=> $token,
        ]);
        $subscript->notify(new NewspaperNotification($subscript));
        $success='souscription reussi';
        return back()->withSuccess($success);
    }
    public function delete($token){
        $unsubscript=Newspaper::whereToken($token)->first();
        abort_if(!$unsubscript,403);
        
        $data=[
            'title'=>$title='se desabonner',
            'description'=>$title,
            'email'=>$unsubscript->email,
        ];
        $unsubscript->delete();
        return view('newspaper.unsubscribe',$data);
    }
   
    public function show(){
        return view('newspaper.popup');
    }

     public function adminNotification(){
        request()->validate([
            'name'=>['required','string'],
            'email'=>['required','email'],
            'message'=>['required','string'],
        ]);
        $name=request('name');
        $email=request('email');
        $message=request('message');
        $user=User::whereRole('admin')->first();
        $user->notify(new AdminNotification($name,$email,$message));
        $message="Votre message a bien ete envoyer";
        return back()->withStatus($message);
    }
}
