<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User_site;
class PostController extends Controller
{
    //get all posts 
    public function get_all_post(){
        $posts = post::all();
        return view('main' , ['posts'=>$posts]);
    }
    //get request and check email for exist
    public function registration(Request $request){
        //init new object
        $user=new User_site;
        $password_check =$request->input("password_check");
        $posts = post::all();
       
        
                $user->fill([
                    'name' =>$request->name,
                    'email'=>$request->email,
                    'password'=>$request->password,
                   ]);
        
        //get all users to check for exist
         
        $users = User_site::all();
        foreach($users as $value ){
           if ($value->name ==$user->name ){
               if($value->password == $user->password){
                   if($value->email ==$user->email){
                       
                       return redirect('/'); //go home

                   }
               }
           }
        }
        if($user->password == $password_check ){
           $user->save();
        }
        return view('main',['posts'=>$posts]);
        
        }     
    
   }

