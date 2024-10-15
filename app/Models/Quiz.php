<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'description',
        'published',
        'public',
        'subject_id',
    ];

    protected $casts = [
        'published' => 'boolean',
        'public'    => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    public function scopePublic($q)
    {
        return $q->where('public', true);
    }

    public function scopePublished($q)
    {
        return $q->where('published', true);
    }

    /**
     * Get the user that created the quiz.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
