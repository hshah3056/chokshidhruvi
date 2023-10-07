@extends('admin-panel.template.layout')

@section('title', 'client-Details')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Update Client Details</h3>
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

        <form role="form" method="post" action="{{route('admin-client-update',['id'=>$client->id])}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-square-controls">Client Details</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username (Client Id)</label>
                                            <p>{{ $client->name.' ('.$client->client_id.')' }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="text" class="form-control square birth-date" name="birth_date" value="{{ Carbon\Carbon::parse($client->birth_date)->format('d-m-Y') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control square" name="name" value="{{ $client->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" name="contact_no" class="form-control square" placeholder="Enter Your Mobile Number"  value="{{ $client->contact_no }}" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Package</label>
                                            <select name="package" id="package" class="form-control square">
                                                <option value="">Select Package</option>
                                                <option value="1" {{$client->package == 1 ? 'selected' : ''}}>1 Month</option>
                                                <option value="3" {{$client->package == 3 ? 'selected' : ''}}>3 Month</option>
                                                <option value="6" {{$client->package == 6 ? 'selected' : ''}}>6 Month</option>
                                                <option value="12" {{$client->package == 12 ? 'selected' : ''}}>12 Month</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" id="gender" class="form-control square">
                                                <option value="">Select gender</option>
                                                <option value="1" {{$client->gender == 1 ? 'selected' : ''}}>Male</option>
                                                <option value="2" {{$client->gender == 2 ? 'selected' : ''}}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" name="email_id" class="form-control square" placeholder="Enter Your Pan Number"  value="{{ $client->email_id }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-square-controls">Address Information</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                                <textarea type="text" class="form-control square" placeholder="Address" name="address" value="{{ $client->address}}">{{ $client->address}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Concern</label>
                                                <textarea type="text" class="form-control square" placeholder="concern" name="concern" value="{{ $client->concern}}">{{ $client->concern}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control square" name="pin_code" placeholder="Please Enter Pincode Number" value="{{ $client->pin_code}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            @if(isset($client->city))
                                                <input type="tel" class="form-control square" name="city" value="{{ $client->city}}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" name="state_id">
                                                @foreach ($states as $state)
                                                    <option value="{{ $state->id }}" {{ $client->state_id == $state->id ? 'selected' : ''}} >{{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control" name="country_id">
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}" {{ $client->country_id == $country->id ? 'selected' : ''}} >{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-30 m-b-20 offset-5 text-center">
                <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </form>
    </div>
@stop

@section('page-javascript')
    <script>
        $(".birth-date").pickadate({
            selectMonths: !0,
            selectYears: 50,
            format: 'dd-mmm-yyyy',
            max: new Date('{{ \Carbon\Carbon::now()->format('Y,m,d') }}')
        });
    </script>

@stop
