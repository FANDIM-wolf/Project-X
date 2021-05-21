<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class User_site extends Model
{
    protected $table = 'user_sites';
    protected $fillable = ['name', 'email', 'password'];
    public function post(){
        return $this->hasMany(Post::class);
    }
    use HasFactory;
}
