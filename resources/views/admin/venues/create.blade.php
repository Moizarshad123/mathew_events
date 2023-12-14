@extends('admin.layouts')
@section('css')
<style>
    .ck-editor__editable[role="textbox"] {
        min-height: 200px;
    }
    .row {
        margin-bottom: 20px !important;
    }
</style>

@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h2>Add Venue</h2>
        <form action="{{ route('admin.venues.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Company</label>
                       <input type="text" required name="company" class="form-control" placeholder="Langham Huntington, Pasadena, Los Angeles">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">City</label>
                       <input type="text" name="city" class="form-control" placeholder="Newyork">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">State</label>
                       <input type="text" name="state" class="form-control" placeholder="USA">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Mailing Address</label>
                       <input type="text" name="mailing_address" class="form-control" placeholder="test@gmail.com">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Phone</label>
                       <input type="text" name="phone" class="form-control" placeholder="1225548754">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Website</label>
                       <input type="text" name="website" class="form-control" placeholder="www.testsite.com">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Zip</label>
                       <input type="text" name="zip" class="form-control" placeholder="10021">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Chain</label>
                       <input type="text" name="chain" class="form-control" placeholder="Langham Hotels">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Built</label>
                       <input type="text" name="built" class="form-control" placeholder="1981">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Airport Distance</label>
                       <input type="text" name="distance_from_airport" class="form-control" placeholder="16 mi. from venue">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Venue Type</label>
                       <input type="text" name="venue_type" class="form-control" placeholder="Hotel">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Brand</label>
                       <input type="text" name="brand" class="form-control" placeholder="Langham Hotels">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Rennovated</label>
                       <input type="text" name="rennovated" class="form-control" placeholder="2010">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Parking</label>
                       <input type="text" name="parking" class="form-control" placeholder="$42.00 / day">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Rating</label>
                       <input type="text" name="ratings" class="form-control" placeholder="4 star">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Guest Rooms</label>
                       <input type="text" name="guest_rooms" class="form-control" placeholder="217">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Total Meeting Space</label>
                       <input type="text" name="total_meeting_space" class="form-control" placeholder="31,032 sq. ft.">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Largest Room</label>
                       <input type="text" name="largest_room" class="form-control" placeholder="11,220 sq. ft.">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">2nd Largest Room</label>
                       <input type="text" name="second_largest_room" class="form-control" placeholder="7,548 sq. ft.">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Meeting Rooms</label>
                       <input type="text" name="meeting_rooms" class="form-control" placeholder="15">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Total Guest Rooms</label>
                       <input type="text" name="total_guest_rooms" class="form-control" placeholder="200">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Suites</label>
                       <input type="text" name="suites" class="form-control" placeholder="38">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Room Features</label>
                        <textarea id="room_features" class="form-control ckeditor" name="room_features" rows="18" cols="80"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Business Services</label>
                        <textarea id="business_services" class="form-control ckeditor" name="business_services" rows="18" cols="80"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Recreational Activities</label>
                        <textarea id="recreational_activities" class="form-control ckeditor" name="recreational_activities" rows="18" cols="80"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Venue Accessibility</label>
                        <textarea id="venue_accessiblity" class="form-control ckeditor" name="venue_accessiblity" rows="18" cols="80"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Facilities</label>
                        <textarea id="facilities" class="form-control ckeditor" name="facilities" rows="18" cols="80"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea id="description" class="form-control ckeditor" name="description" rows="18" cols="80"></textarea>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-12">
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
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>

    CKEDITOR.replace('ckeditor');

</script>
@endsection

