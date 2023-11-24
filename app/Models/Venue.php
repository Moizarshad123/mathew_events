<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $fillable = [
        "company",
        "city",
        "state",
        "mailing_address",
        "lat",
        "lng",
        "phone",
        "website",
        "zip"
    ];
}
