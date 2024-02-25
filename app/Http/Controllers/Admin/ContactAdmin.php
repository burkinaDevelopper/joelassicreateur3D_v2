<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotificationMarketing;
use App\Models\{
    Newspaper,
    User,
};

class ContactAdmin extends Controller
{
    public function index(){
        $data=[
            'newspapers'=>Newspaper::get(),
        ];
        return view('admin.newspaper',$data);
    }

    public function marketingStore(){
        request()->validate([
            'sujet'=>['required'],
            'salutation'=>['required'],
            'message'=>['required'],
        ]);
        $sujet=request('sujet');
        $salutation=request('salutation');
        $message=request('message');
        $users=Newspaper::get();
        Notification::send($users, new NotificationMarketing($sujet,$salutation,$message));
        return back()->withSuccess('Email envoiyer a tout les utilisateur');
    }
}
