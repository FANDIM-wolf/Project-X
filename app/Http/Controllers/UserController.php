<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;
use App\Models\User_site;
use App\Models\User_in_session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    //get registration view 
    public function get_registration_view(Request $request){

        return view('reg');
    }
    //get authorization view 
    public function get_authorization_view(Request $request){

        return view('auth');
    }
    //get authorization view 
    public function authorization(Request $request){
        $email="email";
        $password="password";
        $email_of_visit =$request->input('email');
        $password_of_visit = $request->input('password');
        //$password_of_visit =$request->input('password');
         //get all users to check for exist
        $user=User_site::where($email,'=',$email_of_visit,'and',$password,'=',$password_of_visit)->first();
        
        //$file = file_get_contents('user.json');  // Открыть файл data.json
          
        //$taskList = json_decode($file,TRUE);        // Декодировать в массив 
                        
        //unset($file);                               // Очистить переменную $file
           
        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'
          
        //file_put_contents('user.json',json_encode($user));  // Перекодировать в формат и записать в файл.
        $filename = "user.json";
        $handle = fopen($filename, 'w+');
        fputs($handle, $user->toJson(JSON_PRETTY_PRINT));
        fclose($handle);
        return redirect('/');
    }
    //public function authorization(Request $request){
        /*
        $email_of_visit =$request->input('email');
        $password_of_visit =$request->input('password');
         //get all users to check for exist
         
         $users = User_site::all();
         foreach($users as $value ){
            if ($value->email ==$email_of_visit ){
                if($value->password == $password_of_visit){
                    
                        $user = User_site::where('email',"%{$email_of_visit}%");
                        $jsonString = file_get_contents('user.json');
                        $json = json_decode($jsonString, true);
                        $json['id']=$user->id;
                        $json['name']=$user->name;
                        $json['email']=$user->email;
                        $json['password']=$user->password;
                        $json['image']=$user->image;
                        return redirect('/'); //go home
 
                    
                }
            }
         }
         return redirect('/');
        */
    //}
    
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
        
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $user->image=$imageName;
     
        //get all users to check for exist
         
        $users = User_site::all();
        foreach($users as $value ){
           if ($value->name ==$user->name ){
               if($value->password == $user->password){
                   if($value->email ==$user->email){
                       
                    if($user->password == $password_check ){
                        $user->save();
                        return redirect('/'); //go home
                     }

                   }
               }
           }
        }
        
        // return view('main',['posts'=>$posts]);
        return redirect('/'); //go home
        }
}
