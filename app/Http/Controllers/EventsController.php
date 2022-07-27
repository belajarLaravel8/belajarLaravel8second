<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;

class EventsController extends Controller
{
    public function index()
    {
        $events = EventModel::all();

        return view('events.index', compact('events'));

        // dd($events);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        // dd($request);
        $eventM = new EventModel;
        $eventM->title = $request ->title;
        $eventM->date = $request ->date;
        $eventM->venue = $request ->venue;
        $eventM->organizer_id = $request ->organizer_id;
        $eventM->save();

        return redirect()->route('events.index');

    }


    public function edit($id)
    {
        $eventM = EventModel::find($id);

        return view('events.edit', compact('eventM'));
        // dd($eventM);
    }

    public function update(Request $request)
    {
        $eventM = EventModel::find($request->event_id);

        $eventM->title = $request ->title;
        $eventM->date = $request ->date;
        $eventM->venue = $request ->venue;
        $eventM->organizer_id = $request ->organizer_id;
        $eventM->save();

        return redirect()->route('events.index');
    }

    public function delete($id)
    {
        $eventM = EventModel::find($id);

        $eventM->delete();

        return redirect()->route('events.index');
    }
}
