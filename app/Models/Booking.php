<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}
