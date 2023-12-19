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
        "zip",
        "chain",
        "built",
        "venue_type",
        "brand",
        "rennovated",
        "guest_rooms",
        "ratings",
        "distance_from_airport",
        "parking",
        "total_meeting_space",
        "largest_room",
        "second_largest_room",
        "meeting_rooms",
        "total_guest_rooms",
        "suites",
        "room_features",
        "business_services",
        "recreational_activities",
        "venue_accessiblity",
        "facilities",
        "description",
        "cancellation_policy",

    ];

    public function venue_images() {
        return $this->hasMany(VenueImage::class, 'venue_id');
    }
}
