<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const ADMIN = 1;
    public const AUDITOR = 2;
    public const ORG_ADMIN = 3;
    public const ORG_AUDITOR = 4;
    public const BIZ_MANAGER = 5;
    public const BIZ_EXEC = 6;

    protected $fillable = [
        'name',
        'description',
    ];

    public function user()
    {

        return $this->hasMany(User::class);
    }
}
