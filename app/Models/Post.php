<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'content'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function likes() {
        return $this->hasMany(Like::class, 'post_id');
    }

    public function profile() {
        return $this->belongsTo(Profile::class, 'user_id');
    }
}