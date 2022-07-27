<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;

class EventsController extends Controller
{
    public function index()
    {
        // return 'Index Okay';
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
        $eventM = new EventModel();

        $eventM->title        = $request->title;
        $eventM->venue        = $request->venue;
        $eventM->date         = $request->eventDate;
        $eventM->organizer_id = $request->organizer_id;
        $eventM->save();

        return redirect()->route('events.index');

        dd($request);
    }

    public function edit($id)
    {
        // dd($id);
        // $eventM = EventModel::where('id', $id)
        // ->first();

        $eventM = EventModel::find($id);

        return view('events.edit')
            ->with(compact('eventM'));
    }
    public function update(Request $request)
    {
        // $eventM = EventModel::where('id', $id)
        //     ->get();
        // dd($request->event_id);
        $eventM = EventModel::find($request->event_id);
        $eventM->title        = $request->title;
        $eventM->venue        = $request->venue;
        $eventM->date         = $request->eventDate;
        $eventM->organizer_id = $request->organizer_id;
        $eventM->save();

        // $title = $eventM->title;

        return redirect()
            ->route('events.index');
        // ->with('status', "The data $title has been updated");
    }

    public function delete($id)
    {
        $eventM = EventModel::find($id);

        $eventM->delete();

        return redirect()
            ->route('events.index');
    }


}
