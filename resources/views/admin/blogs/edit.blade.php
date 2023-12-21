@extends('admin.layouts')
@section('css')
<style>
    .ck-editor__editable[role="textbox"] {
        min-height: 200px;
    }
    .row {
        margin-bottom: 20px !important;
    }
    #blah{
        display: none;
    }
</style>

@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h2>Edit Blog</h2>
        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Blog Title</label>
                       <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Blog Created BY</label>
                       <input type="text" name="blog_by" class="form-control" value="{{ $blog->blog_by }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Blog Content</label>
                        <textarea id="content" class="form-control ckeditor" name="content" rows="18" cols="80">{{ $blog->content }}</textarea>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Blog Image</label>
                        <input class="form-control" type="file" name="image"  id="imgInp" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <img src="{{ asset($blog->image) }}" alt="" id="blah" style="height: auto; width:50%">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 12px">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Edit Blog</button>
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
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                $('#blah').show();
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
</script>

@endsection

