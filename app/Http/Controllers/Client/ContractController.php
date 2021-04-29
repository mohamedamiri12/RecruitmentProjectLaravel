<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{
    // show contracts
    public function index(){
        $contracts = Contract::orderBy('created_at','DESC')->get();
        return $contracts;
    }

    // save contract
    public function store(Request $request){
        $newContract = new Contract();
        $newContract->type=$request->contract['type'];
        $newContract->startDate=$request->contract['start_date'];
        $newContract->decription=$request->contract['description'];
        $newContract->save();
        return $newContract;
    }

    // modify a contract
    public function update(Request $request,$id){
        $existingContract = Contract::find($id);
        if ($existingContract){
            $existingContract->type=$request->contract['type'];
            $existingContract->startDate=$request->contract['start_date'];
            $existingContract->decription=$request->contract['description'];
            $existingContract->save();
            return $existingContract;
        }
    }

    // delete a contract
    public function destroy($id){
        $existingContract = Contract::find($id);
        if ($existingContract){
            $existingContract->delete();
        }
    }

    // search a contract
    public function search(Request $request){
        $currentClient = auth()->user()->id;
        $searchedText = $request->input('searchfield'); // searchfield name of input in view
        $contracts = Contract::where('description','LIKE', '%'.$searchedText.'%','AND','client_id','LIKE', '%'.$currentClient.'%')->get();
        return $contracts;
    }
}
