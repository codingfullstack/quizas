<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suspension extends Model
{
    use HasFactory;
    protected $fillable = ['quiz_id', 'blog_id', 'poll_id', 'category', 'suspended_at', 'reason'];
}
