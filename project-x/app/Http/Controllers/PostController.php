<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User_site;
use Illuminate\Support\Facades\DB;

$current_site_user = "none";

class PostController extends Controller
{
    


    //get all posts 
    public function get_all_post(){
        $posts = post::orderBy('created_at', 'desc')->get();
        //$user = User_site::where('name', 'dssdasdf')->get();
        return view('main' , ['posts'=>$posts]);
    }
    //get request and check email for exist
    public function registration(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'password' => 'required|min:8',
            'email'=>'required|email'
        ]);
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
        
        
        //get post by his id 
        public function get_post_by_id($id){
            $post = post::findOrFail($id);
            return view('post',['value'=>$post]);
        }
    
   }

