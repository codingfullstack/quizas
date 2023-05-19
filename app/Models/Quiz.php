<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['user_id', 'quizuser', 'name', 'description', 'public'];
    protected $table = 'quizzes';
    use HasFactory;
    public function quiz_question()
    {
        return $this->hasMany(Quiz_question::class);
    }
    public function quiz_permission()
    {
        return $this->hasMany(Quiz_permission::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_quizzes');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
