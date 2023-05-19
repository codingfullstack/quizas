<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    protected $table ='categories';
    use HasFactory;
    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class, 'category_quizzes');
    }
}
