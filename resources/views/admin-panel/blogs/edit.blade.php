@extends('admin-panel.template.layout')

@section('title', 'Create client')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Edit Blog</h3>
        </div>
    </div>
    <div class="content-body">

        <div class="row offset-4">
            @if (session('errors'))
                <div class="alert alert-danger">
                    @foreach (session('errors')->all() as $error)
                        <span class="text-center">{{ $error }}</span>
                    @endforeach
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success"> {{ session('success') }}</div>
            @endif
        </div>

        <form role="form" method="post" action="{{route('blog-data-list.update',[$blogDetails->id])}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row col-md-8 offset-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-square-controls">Blog Details</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Blog Title</label>
                                            <input type="text" class="form-control square" name="name" placeholder="Enter Your Blog Title" value="{{$blogDetails->name}}">
                                        </div>
                                    </div>
                                    {{--<div class="col-md-12">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label>Blog Content</label>--}}
                                            {{--<textarea type="text" rows="15" name="blog_content" class="form-control square" placeholder="Enter Your Blog Content here"  value="">{{$blogDetails->text}}</textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-md-12 summernote-wrapper">
                                        <label>Blog Content</label>
                                        <textarea id="summernote" rows="15" name="blog_content">{{$blogDetails->text}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Images</label>
                                            <input class="form-control square" type="file" name="images[]" multiple>
                                            @foreach(json_decode($blogDetails->images) as $img)
                                                <img class="mt-2" src="/uploads/{{$img}}" alt="{{$img}}" width="30%">
                                            @endforeach
                                            <p><br>1. Upload File Size Not More than 2 MB.</p>
                                            <p>2. File Upload Before Getting Smaller Size From <a href="http://tinypng.com" target="_blank">Tinypng.com</a><br/></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" id="status" class="form-control square">
                                                <option value="" >Select Status</option>
                                                <option value="1"{{$blogDetails->status == '1' ? 'selected' : ''}}>Active</option>
                                                <option value="2"{{$blogDetails->status == '2' ? 'selected' : ''}}>In-Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30 m-b-20 offset-5 text-center">
                                    <button type="submit" class="btn btn-bg-gradient-x-blue-cyan">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
@stop
@section('import-javascript')
    <script type="application/javascript">
        //    jQuery(document).ready(function () {
        //
        //        $('.summernote').summernote({
        //            height: 250,
        //            minHeight: null,
        //            maxHeight: null,
        //            focus: false,
        //            toolbar: [['style', ['bold', 'italic', 'underline', 'clear']], ['fontsize', ['fontsize']], ['para', ['ul', 'ol', 'paragraph']], ['color', ['color']]],
        //            onfocus: function (e) {
        //                $('body').addClass('overlay-disabled');
        //            },
        //            onblur: function (e) {
        //                $('body').removeClass('overlay-disabled');
        //            },
        //
        //        });
        //
        //        $('.inline-editor').summernote({
        //            airMode: true
        //        });
        //    });
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 250,
                minHeight: null,
                maxHeight: null,
                focus: false
            });
        });
    </script>
@endsection
