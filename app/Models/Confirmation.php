<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_id',
        'confirmed',
    ];

    protected $casts = ['confirmed' => 'boolean',];

    public  function users()
    {
        return $this->hasOne(Users::class);
    }
}
