<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MockupsController extends Controller
{
    public function index(string $view)
    {
        return view($view);
    }
}