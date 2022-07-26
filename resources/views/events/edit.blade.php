<<<<<<< HEAD
@extends('layouts.mariBelajarLaravel8')

@section('content')
<a href="{{route('events.index')}}" class="btn btn-info">Index</i>
</a>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" action="{{route('events.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="event_id" value="{{$eventM->id}}">
                    <div class="form-group">
                        <label for="inputtitle" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" id="inputtitle" placeholder="Title" value="{{$eventM->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputvenue" class="col-sm-2 control-label">Venue</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="venue" id="inputvanue" placeholder="Vanue" value="{{$eventM->venue}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputdate" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="eventDate" id="inputdate" value="{{$eventM->date}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputorganizer" class="col-sm-2 control-label">Organizer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="organizer_id" id="inputorganizer" placeholder="Organizer" value="{{$eventM->organizer_id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputsubmit" class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-10">
                            <input type="submit" name="submitNewEvent" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>


@endsection
=======
@extends('layouts.maribelajarlaravel8')

@section('mainContent')
<br><br>
<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">

            <form class="form-horizontal" method="POST" action="{{ route('events.update') }}">
                @csrf

                <input type="hidden" name="event_id" value="{{ $eventM->id }}" />

                <div class="form-group">
                    <label for="inputTitle" class="col-sm-2 control-label">Title:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="title" id="inputTitle" value="{{ $eventM->title }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputVenue" class="col-sm-2 control-label">Venue:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="venue" id="inputVenue" value="{{ $eventM->venue }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDate" class="col-sm-2 control-label">Date:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="date" id="inputDate" value="{{ $eventM->date }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDate" class="col-sm-2 control-label">Organizer:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="organizer_id" id="inputOrganizerID" value="{{ $eventM->organizer_id }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <input type="submit" name="submitNewEvent" class="btn btn-primary" value="Kemaskini">
                    </div>
                </div>

            </form>
        
        </div>
    <div class="col-md-2"></div>
</div>
@endsection
>>>>>>> ecb0711b0d991e0567f72bdf1cee0b1593c36e61
