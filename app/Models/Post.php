<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
