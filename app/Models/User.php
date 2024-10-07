<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'location',
        'phone',
        'picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Check if the user is admin
     */
    public function isAdmin()
    {
        return $this->role_id === 1;
    }

    /**
     * Check if the user is admin
     */
    public function isAuditor()
    {
        return $this->role_id === 2;
    }

    /**
     * Check if the user is admin
     */
    public function isOrgAdmin()
    {
        return $this->role_id === 3;
    }

    /**
     * Check if the user is admin
     */
    public function isOrgAuditor()
    {
        return $this->role_id === 4;
    }

    /**
     * Check if the user is creator
     */
    public function isBizManager()
    {
        return $this->role_id === 5;
    }

    /**
     * Check if the user is member
     */
    public function isBizExec()
    {
        return $this->role_id === 6;
    }

    public function role()
    {

        return $this->belongsTo(Role::class);
    }
}
