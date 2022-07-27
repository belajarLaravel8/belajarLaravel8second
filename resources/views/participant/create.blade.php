@extends('layouts.maribelajarlaravel8')

@section('mainContent')
<br><br>
<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">

            <form class="form-horizontal" method="POST" action="{{ route('participant.store') }}">
                @csrf

                <input type="hidden" name="event_id" value="{{ $eventM->id }}" />

                <div class="form-group">
                    <label for="inputTitle" class="col-sm-2 control-label">User ID:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="user_id" id="inputID" placeholder="1">
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label for="inputVenue" class="col-sm-2 control-label">Event ID:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="event_id" id="inputEventID" placeholder="{{ $eventM->id }}">
                    </div>
                </div> -->

                <div class="form-group">
                    <label for="inputHadir" class="col-sm-2 control-label">Hadir:</label>
                    <div class="col-sm-5">
                        <input type="radio" id="inputHadir" name="attending" value="1">
                        <label for="hadir">YA</label><br>
                        <input type="radio" id="inputTidakHadir" name="attending" value="0">
                        <label for="hadir">TIDAK</label><br>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputReason" class="col-sm-2 control-label">Catatan (Jika Tidak Hadir):</label>
                    <div class="col-sm-5">
                        <!-- <input type="text" class="form-control" name="reason_for_not_attending" id="inputReason" placeholder="Sila Nyatakan Sebab Ketidakhadiran"> -->
                        <textarea id="inputReason" name="reason_for_not_attending" rows="4" cols="39" id="inputReason" placeholder="Sila Nyatakan Sebab Ketidakhadiran"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <input type="submit" name="submitNewParticipant" class="btn btn-primary" value="Hantar">
                    </div>
                </div>

            </form>
        
        </div>
    <div class="col-md-2"></div>
</div>
@endsection