<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function message(Request $request){


        $store = new Message();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->message = $request->message;
        $store->subject = $request->subject;
        $store->save();

        $email = [
            'name'=> $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'subject'=>$request->subject
        ];

        Mail::to('clintonace09@gmail.com')->send(new ContactMe($email));
        return back()->with(['success' => 'Your mail has been sent']);

    }
}
