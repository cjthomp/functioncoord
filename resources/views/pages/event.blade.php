@extends('layouts.framed')

@section('title', 'Event')

@section('content')
<div class="banner" style="padding: 10px 0 2px;
    background-color: #56AA46;
    color: #fff;
    min-height: 60px;
    line-height: 35px;"
>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>
                    Event / Event Title
                </h2>
            </div>
            <div class="col-md-2">
                42 Days Ago
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            31 January to 03 February
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Created by @username
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Technical Director is @username
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Production Director is @username
        </div>
        <div class="col-md-3">
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Venue is Moscone Center
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Client is Amazon
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Number of Attendees is 2000
        </div>
        <div class="offset-md-4">
            &nbsp;
        </div>
        <div class="col-md-2">
            <img src="" alt="" style="width: 128px; height: 128px;">
        </div>
    </div>
</div>
@endsection