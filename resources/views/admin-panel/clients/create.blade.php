@extends('admin-panel.template.layout')

@section('title', 'Create client')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Add new Client</h3>
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

        <form role="form" method="post" action="{{route('admin-client-store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-square-controls">Personal Details</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="text" class="birth-date form-control square" name="birth_date" value="" placeholder="Please Select date" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control square" name="client_name" placeholder="Enter Your Mobile Number" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" name="contact_no" class="form-control square" placeholder="Enter Your Mobile Number"  value="" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" id="gender" class="form-control square">
                                                <option value="">Select gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" name="email_id" class="form-control square" placeholder="Enter Your Pan Number"  value="" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Package</label>
                                            <select name="package" id="package" class="form-control square">
                                                <option value="">Select Package</option>
                                                <option value="1">1 Month</option>
                                                <option value="3">3 Month</option>
                                                <option value="6">6 Month</option>
                                                <option value="12">12 Month</option>
                                            </select>
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
                                            <textarea type="text" class="form-control square" placeholder="Address" name="address" value=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Concern</label>
                                            <textarea type="text" class="form-control square" placeholder="Concern" name="concern" value=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control square" name="pin_code" placeholder="Please Enter Pincode Number" value="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                                <input type="text" class="form-control square" name="city" placeholder="Please Enter City Name" value="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control" name="country_id">
                                                <option value="">Select Country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}" >{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" name="state_id">
                                                <option value="">Select State</option>
                                                @foreach ($states as $state)
                                                    <option value="{{ $state->id }}" >{{ $state->name }}</option>
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
                <button type="submit" class="btn btn-danger">Create</button>
            </div>
        </form>
    </div>
@stop

@section('page-javascript')
    <script>
        $(".birth-date").pickadate({
            selectMonths: !0,
            selectYears: 70,
            format: 'dd-mmm-yyyy',
            max: new Date('{{ \Carbon\Carbon::now()->format('Y,m,d') }}')
        });
    </script>

@stop
