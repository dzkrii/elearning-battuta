<?php

namespace App\Models;

use App\Filament\Resources\QuizQuestionResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
    ];

    // Relasi ke Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Relasi ke Quiz Questions (akan dibuat nanti)
    public function questions()
    {
        return $this->hasMany(QuizQuestion::class);
    }
}
