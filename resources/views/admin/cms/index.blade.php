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
        <h2>Venue CMS</h2>
        <form action="{{ route('admin.cms.update', 1) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Banner Heading</label>
                       <input type="text" name="heading" class="form-control" value="{{ $content->heading }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Banner Sub Heading</label>
                       <input type="text" name="sub_heading" class="form-control" value="{{ $content->sub_heading }}" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Banner Image</label>
                       <input type="file" name="banner_image" id="banner_image"  class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                     <img src="{{ asset($content->banner_image) }}" id="bannerKiImage" height="200px" width="600px"  alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Section One Heading</label>
                        <input type="text" name="section_one_heading" class="form-control" value="{{ $content->section_one_heading}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Seciton One Content</label>
                        <textarea id="section_one_content" class="form-control ckeditor" name="section_one_content" rows="18" cols="80">{!! $content->section_one_content !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Section Two Heading</label>
                        <input type="text" name="section_two_heading" class="form-control" value="{{ $content->section_two_heading}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Seciton Two Content</label>
                        <textarea id="section_two_content" class="form-control ckeditor" name="section_two_content" rows="18" cols="80">{!! $content->section_two_content !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Section Two Image</label>
                       <input type="file" name="section_two_image" id="section_two_image"  class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                     <img src="{{ asset($content->section_two_image) }}" id="sectionTwoKiImage" height="200px" width="600px"  alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog One Heading</label>
                        <input type="text" name="blog_one_heading" class="form-control" value="{{ $content->blog_one_heading}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog One Content</label>
                        <textarea id="blog_one_content" class="form-control ckeditor" name="blog_one_content" rows="18" cols="80">{!! $content->blog_one_content !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog One Image</label>
                       <input type="file" name="blog_one_image" id="blog_one_image"  class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                     <img src="{{ asset($content->blog_one_image) }}" id="blogOneKiImage" height="200px" width="500px"  alt="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog Two Heading</label>
                        <input type="text" name="blog_two_heading" class="form-control" value="{{ $content->blog_two_heading}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog Two Content</label>
                        <textarea id="blog_two_content" class="form-control ckeditor" name="blog_two_content" rows="18" cols="80">{!! $content->blog_two_content !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog Two Image</label>
                       <input type="file" name="blog_two_image" id="blog_two_image"  class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                     <img src="{{ asset($content->blog_two_image) }}" id="blogTwoKiImage" height="200px" width="500px"  alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog Three Heading</label>
                        <input type="text" name="blog_three_heading" class="form-control" value="{{ $content->blog_three_heading}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog Three Content</label>
                        <textarea id="blog_three_content" class="form-control ckeditor" name="blog_three_content" rows="18" cols="80">{!! $content->blog_three_content !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog Three Image</label>
                       <input type="file" name="blog_three_image" id="blog_three_image"  class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                     <img src="{{ asset($content->blog_three_image) }}" id="blogThreeKiImage" height="200px" width="500px"  alt="">
                    </div>
                </div>
            </div>


            <div class="row" style="margin-top: 12px">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update Changes</button>
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

<script>
    $(document).ready(function() {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#bannerKiImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#banner_image").change(function(){
            readURL(this);
        });

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#sectionTwoKiImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#section_two_image").change(function(){
            readURL2(this);
        });

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blogOneKiImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#blog_one_image").change(function(){
            readURL3(this);
        });

        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blogTwoKiImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#blog_two_image").change(function(){
            readURL4(this);
        });

        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blogThreeKiImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#blog_three_image").change(function(){
            readURL5(this);
        });
    });
</script>
@endsection

