<?php

namespace App\Http\Controllers;
use \App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function add_event(Request $request)
    {
        $request->validate([
            'event_name'=> 'required|string|max:255',
            'event_description' =>'required|string|max:255'
        ]);

        Event::create([
            'event_name'=> $request->event_name,
            'event_description' => $request->event_description,
        ]);
        return redirect()->route('admin.main-dashboard')
                        ->with('success','Event Successfully Added!');
    }
}