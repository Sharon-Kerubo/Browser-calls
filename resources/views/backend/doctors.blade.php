@extends('layouts.backend')
@section('content')
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">{{ config('app.name', 'Tribore Health') }}</a></li>
        <li class="breadcrumb-item">Manage Doctors</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-hospital-user'></i> Manage Doctors <span class='fw-300'></span> <sup class='badge badge-primary fw-500'>WIP</sup>
            {{--            <small>--}}
            {{--                Insert page description or punch line--}}
            {{--            </small>--}}
        </h1>

    </div>
    <!-- Your main content goes below here: -->

    <div class="row">
        <div class="col-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        VIEW DOCTORS
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="frame-wrap">
                            <table id="table_doctors" class="table m-0" width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>License No</th>
                                    <th>License Document</th>
                                    <th>Hospital</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@push('backend-scripts')
@endpush
