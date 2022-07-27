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