<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;
use App\Message;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function applications()
    {
        $apps = App::where('status','1')->get();
        return view('pages.applications')->with(compact('apps'));
    }


    public function saveContact(Request $request) { 

        $contact = new Message;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();
        
        return back()->with('flash_message_success','Thank you for contact us!');;

    }
}
