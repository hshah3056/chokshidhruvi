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
                                        <td>{{ $blog->text }}</td>
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
