<?php

namespace App\Http\Controllers;

class MockupsController extends Controller
{
    public function index(string $view)
    {
        return view($view);
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

//    public function event(Event $event)
    public function event()
    {
        return view('pages.event');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function company()
    {
        return view('pages.company');
    }

    public function notifications()
    {
        return view('pages.notifications');
    }

    public function tasks()
    {
        return view('pages.tasks');
    }

    public function calendar()
    {
        return view('pages.calendar');
    }
}
