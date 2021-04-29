<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{

    // modify a client
    public function update(Request $request,$id){
        $existingClient = Client::find($id);
        if ($existingClient){
            $existingClient->first_name=$request->client['first_name'];
            $existingClient->last_name=$request->client['last_name'];
            $existingClient->email=$request->client['email'];
            // hashed password
            $existingClient->password=$request->client['password'];
            $existingClient->phone_number=$request->client['phone_number'];
            $existingClient->save();
            return $existingClient;
        }
    }

    

}
