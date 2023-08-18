<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleNhapTT;



class GiveController extends Controller
{
    public function give(){
        return view("give");
      }
      function give_k(RuleNhapTT $request){ 
        
       }
}
