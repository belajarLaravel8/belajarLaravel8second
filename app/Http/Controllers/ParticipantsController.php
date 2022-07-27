<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use App\Models\Participant;
use Illuminate\Http\Request;
use PDO;

class ParticipantsController extends Controller
{
    //
    public function index($id_event)
    {
        $eventS = EventModel::where('id', $id_event)
            ->first();
        $participants = Participant::where('event_id', $id_event)
            ->get();

        return view('participants.index')
            ->with(compact('eventS', 'participants'));
    }
    public function create($id_event)
    {
        $eventS = EventModel::where('id', $id_event)
            ->first();
        return view('participants.create')
            ->with(compact('eventS'));
    }
    public function store(Request $request)
    {
        // return view('participants.index.' . $id . '');
        $participants = new Participant();

        $participants->user_id                  = $request->user_id;
        $participants->event_id                 = $request->event_id;
        $participants->attending                 = $request->attending;
        $participants->reason_for_not_attending = $request->reason_for_not_attending;
        $participants->save();

        $id_event = $request->event_id;

        return redirect()->route('participants.index', $id_event);

        dd($request);
    }
    public function edit($id_participants)
    {

        $participants = Participant::find($id_participants);
        // $eventS = EventModel::find('id', $participants->event_id);
        // dd($participants);

        return view('participants.edit')
            ->with(compact('participants'));
    }
    public function update(Request $request)
    {
        $participants = Participant::find($request->event_id);
        $participants->user_id                  = $request->user_id;
        $participants->event_id                 = $request->event_id;
        $participants->attending                 = $request->attending;
        $participants->reason_for_not_attending = $request->reason_for_not_attending;
        $participants->save();
        $id_event = $request->event_id;

        return redirect()
            ->route('participants.index', $id_event);
    }
    public function delete($id_participants)
    {
        $participants = Participant::find($id_participants);
        // dd($participants);

        $participants->delete();

        $event_id = $participants->event_id;

        return redirect()
            ->route('participants.index', $event_id);
    }
}
