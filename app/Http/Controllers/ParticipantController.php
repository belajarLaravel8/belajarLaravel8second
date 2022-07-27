<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\EventModel;

class ParticipantController extends Controller
{
    public function create($id)
    {
        $eventM = EventModel::find($id);
        // dd($eventM);

        return view('participant.create', compact('eventM'));
    }

    public function store(Request $request)
    {

        $participantM = new Participant;
        $participantM->user_id = $request ->user_id;
        $participantM->attending = $request ->attending;
        $participantM->event_id = $request -> event_id;
        $participantM->reason_for_not_attending = $request ->reason_for_not_attending;
     
        $participantM->save();

        

        return redirect()->route('events.index');

    }
}
