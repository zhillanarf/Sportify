<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workout extends Model
{
    use HasFactory;
    protected $table = 'workouts';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function program_workouts(): HasMany
    {
        return $this->hasMany(ProgramWorkout::class);
    }
}
