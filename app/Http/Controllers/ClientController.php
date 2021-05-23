<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    // modify a client
    public function update(Request $request,$id){
        $existingClient = Client::find($id);

        if ($existingClient){
            if($request->has('first_name')){
                $existingClient->first_name=$request->first_name;
            }
            if($request->has('last_name')){
                $existingClient->last_name=$request->input('last_name');
            }
            if($request->has('email')){
                $existingClient->email=$request->input('email');
            }
            if($request->has('phone_number')){
                $existingClient->phone_number=$request->phone_number;
            }
            if($request->has('is_suspended')){
                $existingClient->is_suspended=$request->is_suspended;
            }
            // Update the User Profile Image
            if( $request->hasFile('client_image') ){
                
                // Store The Image in the folder Storage/app/public/images
                $avatar = request()->file('client_image')->getClientOriginalName();
                $path = $existingClient->id.'/'.$avatar;
                $request->file('client_image')->storeAs('clientImages', $path ,'');
                $existingClient->client_image=$avatar;
            }
            
            // hashed password
            //$existingAdmin->password=$request->administrator['password'];

            $existingClient->save();
            return $existingClient;
        }
    }

    // delete a client
    public function destroy($id){
        $existingClient = Client::find($id);
        if ($existingClient){
            $existingClient->delete();
        }
    }

}

