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
                            <th>Action</th>
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
                                <td>
                                    <a href="{{ url('admin/venues/'.$item->id.'/edit') }}" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="javascript:;" class="delete" data-id="{{ $item->id }}"><i class="fa-solid fa-trash" style="color: red"></i></a>

                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{ $venues->links('pagination::simple-bootstrap-4') }}
            </div>
        </div>
    </div>
    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #343a40;
            color: #fff;">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to delete this ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_delete" name="ok_delete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')  
<script>
    $(document).ready(function(){
        var delete_id;
        $(document, this).on('click', '.delete', function() {
            delete_id = $(this).data('id');
            $('#confirmModal').modal('show');
        });

        $(document).on('click', '#ok_delete', function() {
            $.ajax({
                type: "delete",
                url: `{{ url('admin/' . request()->segment(2) . '/') }}/${delete_id}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    $('#ok_delete').text('Deleting...');
                    $('#ok_delete').attr("disabled", true);
                },
                success: function(data) {
                    $('#ok_delete').text('Delete');
                    $('#ok_delete').attr("disabled", false);
                    $('#confirmModal').modal('hide');
                    //   js_success(data);
                    if (data == 0) {
                        toastr.error("something went wrong");
                    } else {
                        toastr.success('Venue Delete Successfully');
                    }
                    window.location.reload();
                }
            })
        });
    })
</script>
@endsection

