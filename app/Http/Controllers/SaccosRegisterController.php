<?php

namespace App\Http\Controllers;

use App\Models\Saccos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class SaccosRegisterController extends Controller
{



    public function getSaccos(Request $request)
    {
        $allSaccosNames = Saccos::all(); //Pull all data from saccos table

        $newSaccos = $request -> new_saccos;

        $available = false;

        $allSaccosNames = Saccos::all();

        $newSaccos = $request -> new_saccos;

        foreach($allSaccosNames as $name)
        {

            if ($name->saccos_name == $newSaccos) {
                $available = true;  
                break;       
            }
        } 

        if($available != true){
            return view('forms.register.create_saccos');
        }
        else{
           return redirect('/');
        }
    } 
    
}
