@extends('layouts.backend')
@section('content')
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">{{ config('app.name', 'Tribore Health') }}</a></li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-home'></i> Dashboard <span class='fw-300'></span> <sup class='badge badge-primary fw-500'>WIP</sup>
            <small>
                Insert page description or punch line
            </small>
        </h1>

    </div>
    <!-- Your main content goes below here: -->

    <div class="row">
{{--        @can('managePatients', App\Models\User::class)--}}
            @if (Auth::user()->roled_id !==1 &&Auth::user()->is_verified == 0)
                <div class="col-xl-12">
                    <div id="panel-1" class="panel">
                        <div class="panel-hdr">
                            <h2>
                                Application Feedback <span class="fw-300"><i></i></span>
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    You have not been approved yet to join the Tribore Health Platform as a medical practitioner. Once you are approved you will receive an email. Please be patient as we expedite the process on our end.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
{{--        @endcan--}}

    </div>
@stop
