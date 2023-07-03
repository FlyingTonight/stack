<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
    ];
    public function user()
    {
        return $this->belongsto(User::class);
    }
    public function category()
    {
        return $this->belongsto(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
