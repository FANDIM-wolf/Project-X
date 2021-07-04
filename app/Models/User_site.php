<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Like;
class User_site extends Model
{
    protected $table = 'user_sites';
    protected $fillable = ['name', 'email', 'password','image'];
    public function post(){
        return $this->hasMany(Post::class);
    }
    public function like_user()
    {
      return $this->belongsTo(Like::class);
    }
    use HasFactory;
}
