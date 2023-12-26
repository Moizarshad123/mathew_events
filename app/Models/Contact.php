<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        "email",
        "event_date",
        "no_of_guests",
        "eventType",
        "lodging_handled",
        "address",
        "hear_about_us",
    ];
}
