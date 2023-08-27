@extends('admin-panel.template.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Dashboard</h3>
        </div>
        <div class="content-header-left col-md-10 col-12 mb-2">
        </div>
    </div>

    <div class="content-body">
        <div class="row match-height">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <a href="{{route('contact-data')}}">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-top">
                                        <i class="la la-address-card font-large-4"></i>
                                    </div>
                                    <div class="media-body text-right align-self-bottom mt-3">
                                        <span class="d-block mb-1 font-medium-1"></span>
                                        <h1 class="info mb-0">{{count($totalContact)}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@stop
