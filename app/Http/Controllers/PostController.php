<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;
use App\Models\User_site;
use App\Models\User_in_session;
use App\Models\Like;
use Illuminate\Support\Facades\DB;

//$current_site_user = "none";

class PostController extends Controller
{
    


    //get all posts 
    public function get_all_post(){
        //get sorted posts
        $posts = post::orderBy('created_at', 'desc')->limit(40)->get();
        //we get admin , then rewrite some data , when user will be in the system
        //$table = User_site::findOrFail(1);
        //$filename = "user.json";
        //$handle = fopen($filename, 'w+');
        //fputs($handle, $table->toJson(JSON_PRETTY_PRINT));
        //fclose($handle);
         //$headers = array('Content-type'=> 'application/json');
        //$user = User_site::where('name', 'dssdasdf')->get();

        // we are in system  ?
        //get session
        $jsonString_session = file_get_contents('session.json');
        $json_session = json_decode($jsonString_session, true);
        $json_session['session'] = true; // we are in system 

        //get user
        $jsonString = file_get_contents('user.json');
        $json = json_decode($jsonString, true);
        
        
        return view('main' , ['posts'=>$posts,'json'=>$json]);
    }
 
    
    //press like
    public function post_like($id){
        
        $likes = Like::all();
        $post = post::findOrFail($id);
        //get name of user
        $jsonString = file_get_contents('user.json');
        $json = json_decode($jsonString, true);
        $name_id = $json['id'];
        $exist = false;
        foreach ($likes as $el){
            if($el->user_site_id == $name_id && $el->post_id  == $id){
                $exist = true;
                $el->user_site_id = NULL;
                $el->post_id = NULL;
                
                $post->likes -= 1;
                $post->save();
                $el->save();
                $exist = false;
                return redirect("/post/$id");
            }
            
           
            
        }
        if($exist == false){
            $like  = new Like ; 
            $like->user_site_id = $name_id;
            $like->post_id = $id ;
            $like->amount = 1;
            $post->likes += 1;
            $like->save();
            $post->save();
        }
        
        
        return redirect("/post/$id");
    }
    
        //get post by his id 
        public function get_post_by_id($id){
            $post = post::findOrFail($id);
            //in one session we can make one view
            $jsonString_session = file_get_contents('session.json');
            $json_session = json_decode($jsonString_session, true);
            
            if ($json_session == true ){
                $post->views +=1;
                $json_session['session'] = false ;
                $post->save();
            }
            return view('post',['value'=>$post]);
        }
        
        //add comment
        public function add_comment(int $id ,Request $request) {
            //get user to make sure what its real user , not admin
           
            $comment = new comment;
            //get name of user
            $jsonString = file_get_contents('user.json');
            $json = json_decode($jsonString, true);

            $comment->name_of_user = $json['name'];
            $comment->content_of_comment = $request->input('content_of_comment');
            $comment->post_id = $id;
            
            if($comment->name != "none" or $comment->name != "admin")
            {
                $comment->save();
            }
            return redirect("/post/$id");
        }
        public function add_post_view() {
            return view('post_creating');
        }
        //get authorization view 
        //public function like_view($id){
        //    $post = post::findOrFail($id);
        //    return view('post',['value'=>$post]);
        //}
        
        //add post
        public function add_post(Request $request){
            $post = new post;
            //get name of user
            $jsonString = file_get_contents('user.json');
            $json = json_decode($jsonString, true);
            $name = $json['name'];
            $post->fill([
                'title' =>$request->title,
                'description'=>$request->description,
                'category'=>$request->category,
                'location'=>$request->location,
                'views' => 0,
                'user_site_id'=>$json['id']
                ]);
                
                $image = $request->file('image');
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('images'),$imageName);
                $post->image =$imageName;

                if($post->name != "none" || $post->name != "admin")
                {
                $post->save();
                }

                return view('post_creating'); //go home
        }
        //get posts with category weather 
        public function get_weather_category(){
            //get sorted posts
            //$posts = post::orderBy('created_at', 'desc')->get();
            //get user
            $jsonString = file_get_contents('user.json');
            $json = json_decode($jsonString, true);
        
            $weather=post::where('category','=','погода')->limit(45)->get();
            return view('main',['posts'=>$weather,'json'=>$json]);
        }
        //get posts with category sport 
        public function get_sport_category(){
            //get user
            $jsonString = file_get_contents('user.json');
            $json = json_decode($jsonString, true);
        
            //get sorted posts
            //$posts = post::orderBy('created_at', 'desc')->get();
            $sport=post::where('category','=','спорт')->limit(45)->get();
            return view('main',['posts'=>$sport,'json'=>$json]);
        }
        //get posts with category news 
        public function get_news_category(){
            //get user
            $jsonString = file_get_contents('user.json');
            $json = json_decode($jsonString, true);
        
            //get sorted posts
            //$posts = post::orderBy('created_at', 'desc')->get();
            $news=post::where('category','=','новости')->limit(45)->get();
            return view('main',['posts'=>$news,'json'=>$json]);
        }
        //get posts wit by high views 
        public function get_hot_posts(){
            //get user
            $jsonString = file_get_contents('user.json');
            $json = json_decode($jsonString, true);
        
            //get sorted posts
            //$posts = post::orderBy('created_at', 'desc')->get();
            $hot_news=post::where('views','>',1000)->orderBy('created_at','desc')->get();
            return view('main',['posts'=>$hot_news,'json'=>$json]);
        }
        //search
        public function search(Request $request){
            //get user which is in session.
            $jsonString = file_get_contents('user.json');
            $json = json_decode($jsonString, true);

            $post_input = $request->input('search');
            $posts= post::where('title','LIKE',"%{$post_input}%")->orderBy('created_at','desc')->get();
            return view('main',['posts'=>$posts,'json'=>$json]);
        }

   }

