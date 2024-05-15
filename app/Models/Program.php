<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'description',
        'image',
        'durasi',
    ];

    public function workouts(): BelongsTo
    {
        return $this->belongsTo(Workout::class, 'workout_id', 'id');
    }
}
