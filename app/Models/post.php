<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User_site;
use App\Models\category;
use App\Models\comment;
use App\Models\Like;
class post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'description', 'views','location','category','image', 'user_site_id'];
    public function user_site()
    {
      return $this->belongsTo(User_site::class);
    }
    public function like_post()
    {
      return $this->belongsTo(Like::class);
    }
    //public function category()
    //{
    //  return $this->belongsTo(category::class);
    //}
    public function comment(){

      return $this->hasMany(comment::class);
    }
    use HasFactory;
}
