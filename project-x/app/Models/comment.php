<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;
class comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['name_of_users','content_of_comment'];
    public function posts()
    {
      return $this->belongsTo(post::class);
    }
    use HasFactory;
}
