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

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class, 'workout_id', 'id');
    }
}
