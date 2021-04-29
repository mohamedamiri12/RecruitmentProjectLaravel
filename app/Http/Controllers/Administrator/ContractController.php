<?php

namespace App\Http\Controllers\administrator;

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
}
