<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use lluminate\Log\Logger;
use App\Models\Administrator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;

class AdministratorController extends Controller
{
    // show admins
    public function index(){
        $administrators = Administrator::orderBy('created_at','DESC')->get();
        return $administrators;
    }

    // add admin form
    public function create(){
        
    }

    // save admin
    public function store(Request $request){
        $newAdmin = new Administrator();
        $newAdmin->first_name=$request->administrator['first_name'];
        $newAdmin->last_name=$request->administrator['last_name'];
        $newAdmin->email=$request->administrator['email'];
        // hashed password
        $newAdmin->password=$request->administrator['password'];
        $newAdmin->phone_number=$request->administrator['phone_number'];

        // is-suspended is 0 by default
        $newAdmin->save();
        return $newAdmin;
    }

    // get admin info and show it in a form
    public function edit(){
    }

    // modify an admin
    public function update(Request $request,$id){
        $existingAdmin = Administrator::find($id);
        if ($existingAdmin){
            if($request->has('first_name')){
                $existingAdmin->first_name=$request->first_name;
            }
            if($request->has('last_name')){
                $existingAdmin->last_name=$request->input('last_name');
            }
            if($request->has('email')){
                $existingAdmin->email=$request->input('email');
            }
            if($request->has('phone_number')){
                $existingAdmin->phone_number=$request->phone_number;
            }
            if($request->has('is_suspended')){
                $existingAdmin->is_suspended=$request->is_suspended;
            }
            // Update the User Profile Image
            if( $request->hasFile('administrator_image') ){
                
                // Store The Image in the folder Storage/app/public/images
                $avatar = request()->file('administrator_image')->getClientOriginalName();
                $path = $existingAdmin->id.'/'.$avatar;
                $request->file('administrator_image')->storeAs('administratorImages', $path ,'');
                $existingAdmin->administrator_image=$avatar;
            }
            
            // hashed password
            //$existingAdmin->password=$request->administrator['password'];

            $existingAdmin->save();
            return $existingAdmin;
        }
    }

    // delete an admin
    public function destroy($id){
        $existingAdmin = Administrator::find($id);
        if ($existingAdmin){
            $existingAdmin->delete();
        }
    }

    // suspend an admin
    public function suspend($id){
        $existingAdmin = Administrator::find($id);
        if ($existingAdmin){
                $existingAdmin->is_suspended=1;
                $existingAdmin->save();
        }
    }
}
