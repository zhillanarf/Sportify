<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'duration'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function program_workouts(): HasMany
    {
        return $this->hasMany(ProgramWorkout::class);
    }
}
