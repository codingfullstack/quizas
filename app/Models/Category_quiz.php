<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_quiz extends Model
{
    protected $table = 'category_quizzes';
    protected $fillable = [
        'category_id',
        'quiz_id',
    ];
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
