<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Role constants
    const ROLE_ADMIN = 1;
    const ROLE_EDUCATOR = 2;
    const ROLE_STUDENT = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function scopeAdmin($query)
    {
        $query->where('role', self::ROLE_ADMIN);
    }

    public function scopeEducator($query)
    {
        $query->where('role', self::ROLE_EDUCATOR);
    }

    public function scopeStudent($query)
    {
        $query->where('role', self::ROLE_STUDENT);
    }

    // Check if the user is an educator
    public function isEducator()
    {
        return $this->role === self::ROLE_EDUCATOR;
    }

    // Check if the user is a student
    public function isStudent()
    {
        return $this->role === self::ROLE_STUDENT;
    }

    public function getRoleNameAttribute()
    {
        switch ($this->role) {
            case self::ROLE_ADMIN:
                return 'Admin';
            case self::ROLE_EDUCATOR:
                return 'Educator';
            case self::ROLE_STUDENT:
                return 'Student';
            default:
                return 'Unknown';
        }
    }

    // Check if the user has any given role (admin, educator, student)
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    // Scope for admins
    public function scopeAdmins($query)
    {
        return $query->where('role', self::ROLE_ADMIN);
    }

    // Scope for educators
    public function scopeEducators($query)
    {
        return $query->where('role', self::ROLE_EDUCATOR);
    }

    // Scope for students
    public function scopeStudents($query)
    {
        return $query->where('role', self::ROLE_STUDENT);
    }

    /**
     * Get all quizzes created by the user.
     */
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
