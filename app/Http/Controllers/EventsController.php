<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.dashboard')->with('events', user()->events);
    }

    public function list()
    {
        return user()->events;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return Event::create($request->all());
    }

    public function show(Event $event)
    {
        return view('pages.event')->with('event', $event);
    }

    public function edit(Event $event)
    {
        return view('pages.event-edit')->with('event', $event);
    }

    public function update(Request $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        //
    }
}
