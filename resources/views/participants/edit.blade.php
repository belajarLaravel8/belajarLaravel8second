@extends('layouts.mariBelajarLaravel8')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" action="{{route('participants.update')}}" method="POST">
                    @csrf
                    <!-- hidden  -->
                    <div class="form-group hidden">
                        <label for="Event" class="col-sm-2 control-label">Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="event_id" id="inputEvent" value="{{$participants->event_id}}">
                        </div>
                    </div>
                    <!-- hidden end -->
                    <div class="form-group">
                        <label for="inputuser" class="col-sm-2 control-label">User</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="user_id" id="inputuser" placeholder="User" value="{{$participants->user_id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputattending" class="col-sm-2 control-label">Atending</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="attending" id="inputuser" placeholder="Attending" value="{{$participants->attending}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputreasons" class="col-sm-2 control-label">Reasons if not attending</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="reason_for_not_attending" id="inpiutreason_for_not_attending" placeholder="Reasons" value="{{$participants->reason_for_not_attending}}">
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
