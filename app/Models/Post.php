<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters){ //Post::newQuery()>filter()
        $query->when($filters['search'] ?? false, function ($query, $search){
            $query
                     ->where('title','like','%' . $search . '%')
                     ->orWhere('body','like','%' . $search . '%');
        });
    }


    public function category(){
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author(){ // looks for author_id, which is not the name of the column, so pass the second argument 'user_id'
        return $this->belongsTo(User::class, 'user_id');
    }
}
