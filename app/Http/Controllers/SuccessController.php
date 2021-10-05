<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    //
     public function success(){
        return view('register.success');
    }
    public function thankyou(){
        return view('register.thankyou');
    }
}
