<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dana extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'collection_type', 'organization_id', 'status', 'start_dt', 'end_dt'];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
