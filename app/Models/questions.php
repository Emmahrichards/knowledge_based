<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // Specify which attributes can be mass-assigned
    protected $fillable = ['content'];

    // Define the relationship with the Answer model
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
