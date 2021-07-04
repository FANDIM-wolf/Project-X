<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_in_session extends Model
{   
    protected $table = 'user_in_sessions';
    protected $fillable = ['name', 'email', 'password','image'];
    use HasFactory;
}
