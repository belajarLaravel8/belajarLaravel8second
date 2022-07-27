<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;

class EventsController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        // return 'Index Okay';
        $events = EventModel::all();
        return view('events.index', compact('events'));
        // dd($events);
    }
=======
        $events = EventModel::all();

        return view('events.index', compact('events'));

        // dd($events);
    }

>>>>>>> ecb0711b0d991e0567f72bdf1cee0b1593c36e61
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
        $eventM = new EventModel();

        $eventM->title        = $request->title;
        $eventM->venue        = $request->venue;
        $eventM->date         = $request->eventDate;
        $eventM->organizer_id = $request->organizer_id;
=======

        // dd($request);
        $eventM = new EventModel;
        $eventM->title = $request ->title;
        $eventM->date = $request ->date;
        $eventM->venue = $request ->venue;
        $eventM->organizer_id = $request ->organizer_id;
>>>>>>> ecb0711b0d991e0567f72bdf1cee0b1593c36e61
        $eventM->save();

        return redirect()->route('events.index');

<<<<<<< HEAD
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
=======
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
>>>>>>> ecb0711b0d991e0567f72bdf1cee0b1593c36e61
    }

    public function delete($id)
    {
        $eventM = EventModel::find($id);

        $eventM->delete();

<<<<<<< HEAD
        return redirect()
            ->route('events.index');
    }


=======
        return redirect()->route('events.index');
    }
>>>>>>> ecb0711b0d991e0567f72bdf1cee0b1593c36e61
}
