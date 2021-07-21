<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class MainController extends Controller
{
    //
    public function get_auth_page(){
        return view(
            'auth'
        );
    }

    //set cookie
    public function save_cooki(Request $request){
        $username = $request->input("u");
        $password = $request->input("p");
        if ($username == "admin" && $password == "admin"){
            echo "Successfully";
        }
        $minutes = 5;
        $response = new Response("hello");
        $response->withCookie(cookie('name',$username,$minutes));
        $response->withCookie(cookie('password',$password,$minutes));
        
        return $response;
    }
    //get cookie
    public function get_cookie(Request $request){
        $name=$request->cookie('name');
        $val = $request->cookie('password');
        return view('auth');
    }
}
