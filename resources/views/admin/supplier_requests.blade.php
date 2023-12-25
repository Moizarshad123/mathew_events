@extends('admin.layouts')
@section('css')

@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h2>New Supplier Requests</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Supplier Name</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Requestor Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier_requests as $item)
                            <tr>
                                <td>{{ $item->supplier_name }}</td>
                                <td>{{ $item->supplier_phone }}</td>
                                <td>{{ $item->supplier_city }}</td>
                                <td>{{ $item->supplier_state }}</td>
                                <td>{{ $item->supplier_country }}</td>
                                <td>{{ $item->requestor_fname.' '.$item->requestor_lname }}</td>
                                <td>{{ $item->requestor_email }}</td>
                                <td>{{ $item->requestor_phone }}</td>
                                <td>
                                    <a href="{{ url('admin/supplier-request-detail/'.$item->id) }}"><i class="fa fa-eye"></i></a>
                                </td>

                               
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{ $supplier_requests->links('pagination::simple-bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection

@section('js')  

@endsection

