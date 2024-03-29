<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['user_id', 'question', 'yes', 'no','suspended'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
