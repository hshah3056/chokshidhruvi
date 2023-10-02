@extends('admin-panel.template.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Client</h3>
        </div>
        {{--{{dd($contact)}}--}}
        <div class="content-header-left col-md-10 col-12 mb-2">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Client Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>address</th>
                                    <th>contact_number</th>
                                    <th>Selected Package</th>
                                    <th>message</th>
                                    <th>Submit At</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($contact as $index => $data)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->subject }}</td>
                                        <td>{{$data->message}}</td>
                                        <td>{{ $data->package }}</td>
                                        <td>{{ $data->contact_number }}</td>
                                        <td>{{$data->created_at}}</td>
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
