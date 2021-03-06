<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate( $request,[

        'name' => 'required',
        'email' => 'required'
        ]);

        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Save Message in Database

        $message->save();

        return redirect('messages')->with('success', 'Message Sent');
        //return $request->input('name');
    }

    public function getMessages()
    {
        $messages = Message::orderBy('created_at', 'dec')->get();
        //$messages = Message::all();


        return view('messages')->with('messages', $messages);
    }
}
