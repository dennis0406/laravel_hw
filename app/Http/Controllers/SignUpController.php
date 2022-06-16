<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    function index(){
        return view('signup');
    }

    public function validated(SignupRequest $Request){
        $user=[ 
            'email'=> $email = $Request-> input("email"),
            'password'=> $password = $Request-> input("password")
        ];

        return view('signup')->with('user',$user);
    }

}
