<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    // show contracts
    public function index(){
        $contracts = Contract::with("client")->with("candidate")->get();
        return $contracts;
    }

    // validate a contract
    public function validateContract($id){
        $existingContract = Contract::find($id);
            if ($existingContract){
                $existingContract->status="validé";
                $existingContract->save();
            }
    }
    // refuse a contract
    public function rejectContract($id){
        $existingContract = Contract::find($id);
            if ($existingContract){
                $existingContract->status="refusé";
                $existingContract->save();
            }
    }

    // delete a client
    public function destroy($id){
        $existingContract = Contract::find($id);
        if ($existingContract){
            $existingContract->delete();
        }
    }
}
