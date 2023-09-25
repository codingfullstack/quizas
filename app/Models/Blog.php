<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model
{
    protected $fillable = ['user_id', 'title', 'body', 'suspended'];
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_blogs');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function suspended() : HasOne
    {
        return $this->hasOne(suspension::class);
    }
}
