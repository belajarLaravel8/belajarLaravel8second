@extends('layouts.mariBelajarLaravel8')

@section('content')
<a href="{{route('events.index')}}" class="btn btn-info">Event Index &nbsp;<i class="fa fa-bookmark" aria-hidden="true"></i>
</a>
<a href="{{route('participants.create', $eventS->id)}}" class="btn btn-info">Add Participants &nbsp;<i class="fa fa-plus-square" aria-hidden="true"></i></a>
<br>
<br>
<div class="card">
    <div class="card-header">
        <h1>
            {{$eventS->title}}
        </h1>
    </div>
    <dic class="card-body">
        <table class="table table-striped table-bordered">
            <tr>
                <th>User</th>
                <th>Event_id</th>
                <th>Atending</th>
                <th>Reasons for Not Attending</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($participants as $data)
            <tr>
                <td>
                    {{$data->user_id}}
                </td>
                <td>
                    {{$data->event_id}}
                </td>
                <td>
                    {{$data->attending}}
                </td>
                <td>
                    {{$data->reason_for_not_attending}}
                </td>
                <td>
                    {{$data->created_at->format('d/m/Y') }} -
                    {{date('H:i', strtotime($data->created_at)) }}
                </td>
                <td>
                    {{$data->updated_at->format('d/m/Y') }} -
                    {{date('H:i', strtotime($data->updated_at)) }}
                </td>
                <td>
                    <a href="{{route('participants.edit', $data->user_id)}}" class="btn btn-warning">Edit &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <td>
                    <a href="{{route('participants.delete', $data->id)}}" class="btn btn-danger">Delete &nbsp;<i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </dic>
</div>



@endsection

</html>
