@extends('admin.layouts')
@section('css')

@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-8">
                <h2>Venues</h2>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.venues.create') }}" class="btn btn-primary" style="float: right">Add Venue</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Mailing Address</th>
                            <th>Phone</th>
                            <th>website</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($venues as $item)
                            <tr>
                                <td>{{ $item->company }}</td>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->state }}</td>
                                <td>{{ $item->mailing_address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->website }}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{ $venues->links('pagination::simple-bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection

@section('js')  

@endsection

