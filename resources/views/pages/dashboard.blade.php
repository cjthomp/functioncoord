@extends('layouts.framed')

@section('title', 'Dashboard')

@section('content')
<div class="banner" style="padding: 10px 0 2px;
    background-color: #56AA46;
    color: #fff;
    min-height: 60px;
    line-height: 35px;"
>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    Events
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>

    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>

    <div class="row">
        <div class="col-md-1">
            <div class="event-add-button">
                +
            </div>
        </div>

        <div class="col-md-10" id="event-cards" title="if starredCount > 0">

            <div class="event-cards-list" style="width: 100%;">
                @foreach ($events as $e)
                <div class="event-cards-item border-dark">
                    <div class="card-body">
                        <h5 class="card-title" style="max-height: 43px; overflow-y: hidden;">{{ $e->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Event #{{ $e->id }}</h6>
                        <ul class="card-text list-unstyled">
                            <li>
                                <span class="event-card-row-title">From:</span>
                                <span class="event-card-row-text">{{ $e->starts_at ? $e->starts_at->format('Y-m-d') : '--' }}</span>
                            </li>
                            <li>
                                <span class="event-card-row-title">To:</span>
                                <span class="event-card-row-text">{{ $e->ends_at ? $e->ends_at->format('Y-m-d') : '--' }}</span>
                            </li>
                            <li>
                                <span class="event-card-row-title">Venue:</span>
                                <span class="event-card-row-text">{{ $e->metadata->venue->name or '--' }}</span>
                            </li>
                            <li>
                                <span class="event-card-row-title">Client:</span>
                                <span class="event-card-row-text">{{ $e->metadata->client or '--' }}</span>
                            </li>
                            <li>
                                <small>Last Updated at {{ $e->updated_at ? $e->updated_at->format('Y-m-d') : $e->created_at->format('Y-m-d') }}</small>
                            </li>
                        </ul>
                        <a href="{{ route('events.show', [$e->id]) }}" class="card-link">Details</a>
                        <a href="{{ route('mockup', ['pages.circles']) }}?event={{ $e->id }}" class="card-link">Circles</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-1" id="event-table">
            <h3>Your Events</h3>
            <table class="table table-condensed">
                <tr>
                    <th>&nbsp;</th>
                    <th>Name</th>
                    <th>Venue</th>
                    <th>Client</th>
                    <th>Starts</th>
                    <th>Ends</th>
                </tr>
                @foreach($events as $e)
                <tr>
                    <td><i class="fa {{ $e->pivot->starred_at ? 'fa-star' : 'fa-star-o' }}"></i></td>
                    <td>
                        <a href="{{ route('events.show', [$e->id]) }}">{{ $e->name }}</a>
                    </td>
                    <td>{{ $e->metadata->venue or '--' }}</td>
                    <td>{{ $e->metadata->client or '--' }}</td>
                    <td>{{ $e->starts_at ? $e->starts_at->format('Y-m-d') : '--' }}</td>
                    <td>{{ $e->ends_at ? $e->ends_at->format('Y-m-d') : '--' }}</td>
                </tr>
                @endforeach
            </table>

            <a href="#">View Archived Events</a>
        </div>
    </div>
</div>
@endsection