<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Image;
use App\App;
use App\Consolen;
use Auth;
use DB;

class UploaderController extends Controller
{
    public function Upload_app(Request $request)
    {
        if($request->ismethod('post')){
            $data = $request->all();
            //echo "<pre>";print_r($data);die;
            $addApp = new App;
            $addApp->app_name = $data['app_name'];
            $addApp->app_cat = $data['app_cat'];
            $addApp->app_os = $data['app_os'];
            $addApp->app_desc = $data['app_desc'];
            $addApp->app_owner = $data['app_owner'];
            $addApp->owner_email = $data['owner_email'];
            $addApp->owner_number = $data['owner_number'];

            //image upload
            if($request->hasfile('image')){
                echo $img_tmp = Input::file('image');
                if($img_tmp->isValid()){

            // image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename  = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/uploader/'.$filename;

         

                $addApp->image = $img_path;
            }
            }

            $addApp->save();


            return redirect('/admin/dashboard/view_app')->with('flash_message_success','Application Uploaded successfully !');
        }
        return view('admin.uploader.upload_app');
    }
    
    public function view_app(Request $request)
    {
        $id = Auth::user()->id;
        //
        $apps['data'] = DB::table('apps')->where('id','=', $id)->first();
        if(count ($apps)>0){
            return view('admin.uploader.view_app',compact('apps'));
        }
        else {
            return view('admin.uploader.view_app');
        }
       
    }

    public function payment(Request $request)
    {
        if($request->ismethod('post')){
            $data = $request->all();
            //echo "<pre>";print_r($data);die;
            $addApp = new Consolen;
            $addApp->c_type = $data['c_type'];

            $addApp->save();


            return redirect('/admin/dashboard/proceed_to');
        }
        return view('admin.uploader.payment');
    }

    public function proceed_to(Request $request)
    {
        $consoles = Consolen::get();
        return view('admin.uploader.proceed_to', compact('consoles'));
    }

}
