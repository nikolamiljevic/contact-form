<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //validate je funkcija od Controller-a kojom zahtevamo da popuni korisnik polja koja trazimo
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);
        //pravljenje poruke

        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //sacuvaj poruku
        $message->save();

        //redirect na pocetnu stranu
        return redirect('/')->with('success','Message sent');
    }

    public function getMessages(){
        $messages =  Message::all();

        return view('messages')->with('messages',$messages);
       
    }
        
}
