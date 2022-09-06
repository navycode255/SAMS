<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\LoanRequest;
use App\models\Individual;
use Illuminate\Support\Facades\DB;
class LoanController extends Controller
{
    public function savetoLoan(Request $request){
        //check if the user exists
        $user = Individual::where('fname', $request->fname) -> where('mname',$request->mname) -> where('sname',$request->lname)->first();
        if(!$user){
          // return view('LoanApplication',"this user is not a saccos member");
        }
        else{

            //check if loan request exist
            $Check_request = LoanRequest::where('user_id',$user->id)->first();

            if(!$Check_request){

                $newLoan = new LoanRequest;
                $newLoan->user_id = $user->id;
                $newLoan->first_name= $request->fname;
                $newLoan->second_name = $request->mname;
                $newLoan->last_name = $request->lname;
                $newLoan->amount = $request->amount;
                $newLoan->save();
            }
            else{
                //return view('LoanApplication',"this user is not a saccos member");
            }
        }
        
       // if() //this check if the customer exists and is permited to have loan
       // {
            


        //returns the loan approved view

            return view('LoanApplication');
    }

    public function SearchLoans()
    { 
        //seach the name in 
        // $row = Individual::find($request->value);

        // $value = LoanAccount::find($row->id);

        // if($value != null){
          
        // }
        return view('LoanApplication');

    }

    public function RetriveLoans()
    {

    }
}
