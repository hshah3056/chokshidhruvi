@extends('admin-panel.template.layout')

@section('title', 'Client Records')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">
            <h3 class="content-header-title">List Of Clients</h3>
            <a class="btn btn-md btn-bg-gradient-x-orange-yellow pull-right" href="{{route('admin-client-create')}}">Add New</a>
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
                                    <th>Client Id</th>
                                    <th>Client Name</th>
                                    <th>Contact Number</th>
                                    <th>Address</th>
                                    <th>email</th>
                                    <th>Concern</th>
                                    <th>Selected Package</th>
                                    <th>Submit At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($clients as $index => $client)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $client->client_id }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->contact_no }}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->email_id}}</td>
                                        <td>{{ $client->concern }}</td>
                                        <td>{{ $client->package }} Months</td>
                                        <td>{{ Carbon\Carbon::parse($client->created_at)->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="{{route('admin-client-data-edit',['id' => $client->id])}}" class="btn btn-sm btn-success">Edit</a>
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
