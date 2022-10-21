<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // if :  Route::get('posts/{post}'
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
