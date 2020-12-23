<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;
use App\Owner;
use App\User;
use Session;
use Auth;

class AdminController extends Controller
{
    public function welcome()
    {
        $apps = App::where('status','1')->get();
        return view('user/welcome')->with(compact('apps'));
    }
    public function index()
    {
    	return view('admin.dashboard');
    }

    public function logout()
    {
        Session::forget('frontSession');
        Auth::logout();
        return redirect('/');
    }
}
