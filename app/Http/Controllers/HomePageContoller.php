<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\about;
use app\Models\blog;
use app\Models\contact;
use app\Models\portfolio;
use app\Models\resume;
use app\Models\services;
use app\Models\user_messages;
use App\Http\Requests\UserMessages;








class HomePageContoller extends Controller

    {
        public function index(){
            $info = contact::where('id', 1)->first();
            $about = about::where('id', 1)->first();
            return view('homepage', compact('contact','about'));
        }
    
    //      public function user_messages(UserMessages $request)
    //      {
    //          $send = UserMessages::create([
    //              'name'      => $request->name,
    //              'email'     => $request->email,
    //              'subject'   => $request->subject,
    //              'message'   => $request->message
                
    //          ]);
    //          if ($send)
    //          {
    //              return redirect()->route('home');
    //          }
           
    //      }
    
     }