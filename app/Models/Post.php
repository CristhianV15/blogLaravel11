<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //ver convenciones 9
    //post -> posts    
    use HasFactory;
    protected $table = 'posts';

}
