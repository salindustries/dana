<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'organization_type_id', 'logo', 'website', 'email', 'phone', 'status'];

    public function organization_type(): BelongsTo
    {
        return $this->belongsTo(OrganizationType::class);
    }

    public function api_keys(): HasMany
    {
        return $this->hasMany(ApiKey::class);
    }

    public function danas(): HasMany
    {
        return $this->hasMany(Dana::class);
    }
}
