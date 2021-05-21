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
        $user->fill([
          'name' =>$request->name,
          'email'=>$request->email,
          'password'=>$request->password,
         ]);
         $posts = post::all();
         //get all post to check for exist
         /*
         $posts = post::all();
         foreach($posts as $value ){
            if ($value['name']==$user['name'] ){
                if($value['password'] == $user['password']){
                    if($value['email']==$user['email']){
                        
                        return redirect('/'); //go home

                    }
                }
            }
         }
         */
        
         $user->save();

         return view('main',['posts'=>$posts]);
         
    }
}
