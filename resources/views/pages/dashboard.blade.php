@extends('layouts.framed')

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
                Events
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
                @foreach ([1,2,3,4,5,6,7] as $i)
                <div class="event-cards-item border-dark">
                    <div class="card-body">
                        <h5 class="card-title">Event Card</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Event #{{ $i }}</h6>
                        <ul class="card-text list-unstyled">
                            <li>
                                <span class="event-card-row-title">From:</span>
                                <span class="event-card-row-text">Thu Jan 31, 2018</span>
                            </li>
                            <li>
                                <span class="event-card-row-title">To:</span>
                                <span class="event-card-row-text">Sun Feb 03, 2018</span>
                            </li>
                            <li>
                                <span class="event-card-row-title">Venue:</span>
                                <span class="event-card-row-text">Moscone Center</span>
                            </li>
                            <li>
                                <span class="event-card-row-title">Client:</span>
                                <span class="event-card-row-text">Amazon</span>
                            </li>
                            <li>
                                Last Updated at ...
                            </li>
                        </ul>
                        <a href="{{ route('mockup', ['pages.event']) }}?event={{ $i }}" class="card-link">Details</a>
                        <a href="{{ route('mockup', ['pages.circles']) }}?event={{ $i }}" class="card-link">Circles</a>
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
                @foreach([1,2,3,4,5,6,7,8,9,10] as $i)
                <tr>
                    <td><i class="fa fa-star-o"></i></td>
                    <td colspan="5">I'm Event Row #{{ $i }}. Yay!</td>
                </tr>
                @endforeach
            </table>

            <a href="#">View Archived Events</a>
        </div>
    </div>
</div>
@endsection