<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    function login (Request $req){
         $user = user::where(['email'=>$req->email])->first();
       
         if(!$user || !Hash::check($req->password,$user->password))
         {
         return "Email and Password do not match !!!";
        } else{
            //return "hello " . $user->name;
            $req->session()->put('user',$user);
            return redirect ('/');
        }
    }

    
}
