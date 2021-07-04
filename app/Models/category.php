<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Apps\Models\post;
class category extends Model
{   
    protected $table = 'categories';
    protected $fillable = ['name_of_category','content_of_comment'];
    //public function post()
    //{
      //return $this->hasMany(post::class);
    //}
    use HasFactory;
}
