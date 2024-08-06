<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    // Specify which attributes can be mass-assigned
    protected $fillable = ['body', 'question_id'];

    // Define the inverse of the relationship with the Question model
    public function questions()
    {
        return $this->belongsTo(answer::class); // Use the correct model name with proper casing
    }
}

