<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date', 'asc')->get()->take(3);
        return Inertia::render('Home', [
            'events' => $events
        ]);
    }
}
