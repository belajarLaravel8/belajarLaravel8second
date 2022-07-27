@extends('layouts.maribelajarlaravel8')

@section('mainContent')
<br><br>
<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">

            <form class="form-horizontal" method="POST" action="{{ route('events.store') }}">
                @csrf

                <div class="form-group">
                    <label for="inputTitle" class="col-sm-2 control-label">Title:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Sila Masukkan Tajuk">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputVenue" class="col-sm-2 control-label">Venue:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="venue" id="inputVenue" placeholder="Sila Masukkan Tempat">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDate" class="col-sm-2 control-label">Date:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="date" id="inputDate" placeholder="Sila Pilih Tarikh">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDate" class="col-sm-2 control-label">Organizer:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="organizer_id" id="inputOrganizerID" placeholder="Sila Masukkan ID Penaja">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <input type="submit" name="submitNewEvent" class="btn btn-primary" value="Hantar">
                    </div>
                </div>

            </form>
        
        </div>
    <div class="col-md-2"></div>
</div>
@endsection