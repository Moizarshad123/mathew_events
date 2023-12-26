@extends('admin.layouts')
@section('css')

@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h2>Supplier Information</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                
                        <tr>
                            <th colspan="2">Supplier Name</th>
                            <td colspan="2">{{ $content->supplier_name }}</td>
                            <th colspan="2">Supplier Phone</th>
                            <td colspan="2">{{ $content->supplier_phone }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ $content->supplier_city }}</td>
                            <th>State</th>
                            <td>{{ $content->supplier_state }}</td>
                            <th>Country</th>
                            <td>{{ $content->supplier_country }}</td>
                            <th>ZIP</th>
                            <td>{{ $content->supplier_zip }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">Address1</th>
                            <td colspan="2">{{ $content->supplier_address1 }}</td>
                            <th colspan="2">Address2</th>
                            <td colspan="2">{{ $content->supplier_address2 }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">Additional Information</th>
                            <td colspan="6">{{ $content->supplier_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2>Requestor Information</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th colspan="1">Requestor Name</th>
                        <td colspan="3">{{ $content->requestor_fname.' '.$content->requestor_lname }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $content->requestor_email }}</td>
                        <th>Phone</th>
                        <td>{{ $content->requestor_phone }}</td>

                    </tr>
                    <tr>
                        <th colspan="1">Organization</th>
                        <td colspan="3">{{ $content->requestor_organization }}</td>
                    </tr>
                    <tr>
                        <th colspan="1">Additional Information</th>
                        <td colspan="3">{{ $content->requestor_info }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('js')  

@endsection

