<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_permission extends Model
{
    protected $fillable = ['user_id','quiz_id','is_correct', 'session'];
    protected $table = 'quiz_permissions';
    use HasFactory;
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
