<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Image;
use App\User;
use App\App;
use App\Message;

class OwnerController extends Controller
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
                $img_path = 'uploads/owners/'.$filename;

            // image resize
                Image::make($img_tmp)->resize(500,500)->save($img_path);

                $addApp->image = $img_path;
            }
            }

            $addApp->save();


            return redirect('/super_admin/dashboard/view_app')->with('flash_message_success','Application Uploaded successfully !');
        }
        return view('admin.owner.upload_app');
    }
    
    public function view_app()
    {
        $apps = App::paginate(10);
        return view('admin.owner.view_app', compact('apps'));
    }

    public function deleteApp($id=null)
    {
        App::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','App Deleted!');
    }

    public function view_user()
    {
        $user = User::get();
    	return view('admin.owner.view_user', compact('user'));
    }

    public function view_messages()
    {
        $messages = Message::get();
    	return view('admin.owner.view_messages', compact('messages'));
    }




    public function updateStatus(Request $request){
        $app = App::find($request->app_id);
        $app->status = $request->status;
        $app->save();
        return response()->json(['success' => 'Status Changed Successfully!']);
    }
}
