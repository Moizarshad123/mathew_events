@extends('admin.layouts')
@section('css')

@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h2>Venue Request Detail</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                
                        <tr>
                            <th colspan="">Event Type</th>
                            <td colspan="">{{ $venue->event_type }}</td>
                            <th colspan="">Arriving Date</th>
                            <td colspan="">{{ date('m-d-Y',strtotime($venue->arriving_date)) }}</td>
                            <th colspan="">Departure Date</th>
                            <td colspan="">{{ date('m-d-Y',strtotime($venue->arriving_date)) }}</td>
                        </tr>
                        <tr>
                            <th>Are your event dates flexible?</th>
                            <td colspan="5">{{ $venue->is_event_dates_flexible }}</td>
                        </tr>
                            <th>Does your event need guest rooms?</th>
                            <td>{{ $venue->event_need_guest_rooms }}</td>

                                <th>Guest rooms per night</th>
                                <td>{{ $venue->event_need_guest_rooms == "yes" ? $venue->guest_rooms_per_night : "" }}</td>
                                <th>People per guest room</th>
                                <td>{{ $venue->event_need_guest_rooms == "yes" ? $venue->people_per_guest_room : "" }}</td>
                        </tr>
                        <tr>
                            <th colspan="">Does your event need meeting rooms?</th>
                            <td colspan="">{{ $venue->event_need_meeting_rooms }}</td>                        
                            <th colspan="">Attendees per day</th>
                            <td colspan="">{{ $venue->event_need_meeting_rooms == "yes" ? $venue->attendees_per_day : "" }}</td>
                        </tr>
                        <tr>
                            <th colspan="">About Event</th>
                            <td colspan="">{{ $venue->description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2>Contact Details</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <td>{{ $venue->name }}</td>
                    <tr>
                        <th>Email</th>
                        <td>{{ $venue->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $venue->phone }}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{ $venue->city }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{ $venue->country }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <h2>Venues</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Venue</th>
                            <th>City</th>
                            <th>State</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($venue["orders"] as $item)
                            <tr>
                                <td><img src="{{ $item->image }}" style="width:120px; height: 100px" alt=""></td>
                                <td>{{ $item->venue }}</td>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->state }}</td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('js')  

@endsection

