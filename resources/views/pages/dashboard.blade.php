@extends('layouts.framed')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1" id="event-cards" title="if starredCount > 0">

            <h3>Starred Events</h3>

            <div class="card-deck event-cards-list" style="width: 100%; column-count: 5;">
                @foreach ([1,2,3,4,5,6,7,8,9,10,11] as $i)
                <div class="card event-cards-item border-dark" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Event Card</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Event #{{ $i }}</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('mockup', ['pages.event']) }}?event={{ $i }}" class="card-link">Details</a>
                        <a href="{{ route('mockup', ['pages.circles']) }}?event={{ $i }}" class="card-link">Circles</a>
                    </div>
                </div>
                @if ( ($loop->index + 1) % 4 === 0)
                <div class="w-100 hidden-s-down hidden-lg-up">&nbsp;</div>
                @endif
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
                    <th>Name</th>
                    <th>Venue</th>
                    <th>Client</th>
                    <th>Starts</th>
                    <th>Ends</th>
                </tr>
                @foreach([1,2,3,4,5,6,7,8,9,10] as $i)
                <tr>
                    <td colspan="5">I'm Event Row #{{ $i }}. Yay!</td>
                </tr>
                @endforeach
            </table>

            <a href="#">View Archived Events</a>
        </div>
    </div>
</div>
@endsection