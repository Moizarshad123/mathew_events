<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "event_type",
        "arriving_date",
        "departure_date",
        "is_event_dates_flexible",
        "event_need_guest_rooms",
        "guest_rooms_per_night",
        "people_per_guest_room",
        "event_need_meeting_rooms",
        "attendees_per_day",
        "description",
        "planning_for_another_organization",
        "name",
        "email",
        "phone",
        "city",
        "country",
        "organization",
        "commission_rate",
        "client_organization_name",
        "client_organization",
        "industry",
        "hear_from_venues_by",
        "contacted_via"
    ];

    public function orders() {
        return $this->hasMany(OrderVenue::class,'venue_request_id');
    }
}
