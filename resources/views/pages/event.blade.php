@extends('layouts.framed')

@section('title', $event->name ?? 'Event')

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
                    Event / {{ $event->name or 'Name' }}
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
            <h3>
                <span class="event-header-date-start">{{ $event->starts_at->format('D, j M') ?? '--' }}</span>
                to
                <span class="event-header-date-end">{{ $event->ends_at ? $event->ends_at->format('D, j M') : '--' }}</span>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Created by @username
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Technical Director is {{ $event->metadata->td or '@username' }}
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Production Director is {{ $event->metadata->pd or '@username' }}
        </div>
        <div class="col-md-3">
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Venue is {{ $event->metadata->venue->name or '--' }}
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Client is {{ $event->metadata->client or '--' }}
            <div class="event-detail-field"></div>
            <i class="fa fa-user"></i> Number of Attendees is {{ $event->metadata->attendees or '--' }}
        </div>
        <div class="offset-md-3">
            &nbsp;
        </div>
        <div class="col-md-2">
            <img src="" alt="" style="width: 128px; height: 128px;">
        </div>
    </div>
</div>
@endsection