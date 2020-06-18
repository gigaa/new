<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Message;
use  App\Http\Requests\MessageRequest;

class SendEmailController extends Controller
{



         public function create()
          {
              return view('front');
          }


          public function store(MessageRequest $request)
          {

              $message=new Message;
              $message->title = $request->input('title');
              $message->name = $request->input('name');
              $message->email = $request->input('email');
              $message->message = $request->input('message');
              $message->save();
              return back()->with('success', 'Message Sent');
          }
}
