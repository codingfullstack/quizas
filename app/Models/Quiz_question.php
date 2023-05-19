<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_question extends Model
{
    protected $fillable = ['quiz_id', 'question','question_id', 'A', 'B', 'C', 'D', 'answer'];

    use HasFactory;
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
