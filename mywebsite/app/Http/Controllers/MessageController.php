<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required'
    	]);
    
    //creating new message
    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('message');

    //saving 
    $message->save();

    //redirecting
    return redirect('/')->with('success','Message sent');



    }
    public function getMessage(){
    	$messages = Message::all();

    	return view('messages')->with('messages',$messages);
    }
}
