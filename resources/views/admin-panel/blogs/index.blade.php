@extends('admin-panel.template.layout')

@section('title', 'Blogs Listing')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">
            <h3 class="content-header-title">List Of Blog</h3>
            <a class="btn btn-md btn-bg-gradient-x-orange-yellow pull-right" href="{{route('blog-data-list.create')}}">Add New Blog</a>
        </div>
        {{--{{dd($contact)}}--}}
        <div class="content-header-left col-md-12 col-12 mb-2">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Blog Name</th>
                                    <th>Text</th>
                                    <th>Images</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($blogs as $index => $blog)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $blog->name }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal_{{$index}}"> Click here  </button>
                                            <div class="modal fade" id="exampleModal_{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="width: 50%">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    {{--<div class="col-md-4">.col-md-4</div>--}}
                                                                    <div class="col-md-12">{!! $blog->text  !!}</div>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td width="50%">
                                            @foreach(json_decode($blog->images) as $image)
                                                <img width="30%" src="/uploads/{{$image}}" alt="">
                                                @endforeach
                                        </td>
                                        <td>
                                            @if($blog->status == 1)
                                                <span class="badge badge-success"> Active </span>
                                            @else
                                                <span class="badge badge-danger"> In-Active </span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin-blog-edit',['id' => $blog->id])}}" class="btn btn-sm btn-bg-gradient-x-blue-cyan">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
