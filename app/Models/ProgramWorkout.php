<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramWorkout extends Model
{
    use HasFactory;
    protected $table = 'program_workouts';

    protected $fillable = [
        'program_id',
        'workout_id',
        'reps',
        'sets',
    ];

    public function program(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function workout(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Workout::class);
    }
}
