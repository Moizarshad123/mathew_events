@extends('admin.layouts')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h2>Upload Images</h2>
        <form action="{{ route('admin.uploadImages') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Select Venue</label>
                        <select name="venue_id" class="form-control js-example-disabled-results" required>
                            <option value="">Select Venue</option>
                            @foreach ($venues as $item)
                                <option value="{{ $item->id }}">{{ $item->company }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Images</label>
                        <input class="form-control" type="file" name="images[]" multiple required>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 12px">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        
        </form>
    </div>
@endsection

@section('js')  
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        var $disabledResults = $(".js-example-disabled-results");
        $disabledResults.select2();
    </script>
@endsection

