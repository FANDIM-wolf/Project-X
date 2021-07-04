<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User_site;
class Like extends Model
{
    protected $table = 'likes';
    protected $fillable = ['user_site_id','post_id'];
    
    public function user_add(){

      return $this->hasMany(User_site::class);
    }
    public function post_add(){

        return $this->hasMany(Post::class);
    }
    use HasFactory;
}
