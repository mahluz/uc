@extends('layouts.admin')
@section('css')

@endsection
@section('content')

<div class="container-fluid">
<hr>
<a href="{{ url('admin/upcomingEvent/create') }}"><button type="button" class="btn btn-primary">Create new Event</button></a>
<hr>

<div class="table-responsive">
<table id="table" class="table table-striped">
	<thead>
		<tr>
			<td>No.</td>
			<td>Image</td>
			<td>Title</td>
			<td>Content</td>
			<td>Place</td>
			<td>Date</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($upcoming_event as $index => $ini)
		<tr>
			<td>{{$index+1}}</td>
			<td><img src="{{url('storage/app/'.$ini->photo)}}" class="img-responsive"></td>
			<td>{{$ini->item}}</td>
			<td>{{$ini->content}}</td>
			<td>{{$ini->place}}</td>
			<td>{{$ini->date}}</td>
			<td>
				<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Change" onclick="event.preventDefault();document.getElementById('edit{{$ini->id}}').submit();">
				<i class="fa fa-magic"></i>
				</a>
				<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Delete" onclick="event.preventDefault();document.getElementById('delete{{$ini->id}}').submit();">
				<i class="fa fa-times"></i>
				</a>
				<form id="edit{{$ini->id}}" action="{{url('admin/upcomingEvent/edit')}}" method="POST">
					{{csrf_field()}}
					<input type="hidden" name="id" value="{{$ini->id}}">
				</form>
				<form id="delete{{$ini->id}}" action="{{url('admin/upcomingEvent/delete')}}" method="POST">
					{{csrf_field()}}
					<input type="hidden" name="id" value="{{$ini->id}}">
					<input type="hidden" name="photo" value="{{$ini->photo}}">
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
	
</div>

@endsection
@section('script')

@endsection