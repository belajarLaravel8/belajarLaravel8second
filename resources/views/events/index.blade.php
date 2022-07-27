<<<<<<< HEAD
@extends('layouts.mariBelajarLaravel8')

@section('content')
<a href="{{route('events.create')}}" class="btn btn-info">Tambah Event &nbsp;<i class="fa fa-plus-square" aria-hidden="true"></i>
</a>
<br>
<br>
<div class="card">
    <dic class="card-body">
        <table class="table table-striped table-bordered">
            <tr>
                <th>Title</th>
                <th>Vanue</th>
                <th>Date</th>
                <th>Organizer</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
            @foreach($events as $data)
            <tr>
                <td>
                    {{$data->title}}
                </td>
                <td>
                    {{$data->venue}}
                </td>
                <td>
                    {{$data->date}}
                </td>
                <td>
                    {{$data->organizer_id}}
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
                    <a href="{{route('events.edit', $data->id)}}" class="btn btn-warning">Edit &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <td>
                    <a href="{{route('events.delete', $data->id)}}" class="btn btn-danger">Delete &nbsp;<i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
                <td>
                    <a href="{{route('participants.index', $data->id)}}" class="btn btn-info">Add Participants &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </dic>
</div>



@endsection

</html>
=======
@extends('layouts.maribelajarlaravel8')

@section('mainContent')
<a href='{{ route('events.create') }}' class="btn btn-info">Tambah Event</a>
<br><br>

<table class="table table-striped table-bordered">
    <tr>
        <th>Bil</th>
        <th>Title</th>
        <th>Venue</th>
        <th>Date</th>
        <th>Organizer</th>
        <th>Peserta</th>
        <th>Kemaskini</th>
        <th>Padam</th>
    </tr>
    @foreach($events as $count => $row)
    <tr>
        <td>{{$count+1}}</td>
        <td>{{ $row->title }}</td>
        <td>{{ $row->venue }}</td>
        <td>{{ $row->date }}</td>
        <td>{{ $row->organizer_id }}</td>
        <td><a href="{{ route('participant.create', $row->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-add" aria-hidden="true"></span> Tambah </a> 
        <a href="{{ route('participant.create', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-add" aria-hidden="true"></span> Papar </a></td>
        <td><a href="{{ route('events.edit', $row->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit </a></td>
        <td><a href="{{ route('events.delete', $row->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete </a></td>
    </tr>
    @endforeach
</table>

@endsection
>>>>>>> ecb0711b0d991e0567f72bdf1cee0b1593c36e61
