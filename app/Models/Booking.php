<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',        // foreign key
        'service_id',     // foreign key
        'availability_id', // foreign key (optional)
        'start_time',
        'end_time',
        'status',
    ];

    public function reminders(): HasMany
    {
        return $this->hasMany(Reminder::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function availability(): BelongsTo
    {
        return $this->belongsTo(Availability::class);
    }
}
