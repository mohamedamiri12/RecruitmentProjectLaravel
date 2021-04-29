<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    // show clients
    public function index(){
        $clients = Client::orderBy('created_at','DESC')->get();
        return $clients;
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

    // suspend a client
    public function suspend($id){
        $existingClient = Client::find($id);
            if ($existingClient){
                $existingClient->is_suspended=1;
                $existingClient->save();
            }
    }

    // search a client
    public function search(Request $request){
        $searchedText = $request->input('searchfield'); // searchfield name of input in view
        $clients = Client::where('last-name', 'LIKE', '%'.$searchedText.'%', 'OR','firts-name','LIKE', '%'.$searchedText.'%')->get();
        return $clients;
    }


}
