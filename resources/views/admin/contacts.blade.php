@extends('admin.layouts')
@section('css')

@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h2>Contacts</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Event Date</th>
                            <th>No of Guests</th>
                            <th>Event Type</th>
                            <th>Address</th>
                            <th>Hear About Us</th>
                            <th>Lodging Handled Via</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->event_date }}</td>
                                <td>{{ $item->no_of_guests }}</td>
                                <td>{{ $item->eventType }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->hear_about_us }}</td>
                                <td>{{ $item->lodging_handled }}</td>  
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{ $contacts->links('pagination::simple-bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection

@section('js')  

@endsection

