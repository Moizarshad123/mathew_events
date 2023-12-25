<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderVenue extends Model
{
    use HasFactory;
    protected $fillable = [
        "venue_request_id",
        "user_id",
        "venue_id",
        "venue",
        "city",
        "state",
        "image"
    ];
}
