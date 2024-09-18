<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApiKey extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'organization_id', 'access_key', 'secret_key', 'access_type', 'status'];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
