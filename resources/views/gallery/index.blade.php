@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
	<hr>
	<a href="{{ url('admin/gallery/create') }}"><button type="button" class="btn btn-primary">Insert new Pic</button></a>
	<hr>

	<div class="table-responsive">
	<table class="table table-striped" id="table">
		<thead>
			<tr>
				<td>No.</td>
				<td>Picture</td>
				<td>Author</td>
				<td>Title</td>
				<td>Description</td>
				<td>Created at</td>
				<td>Action</td>
			</tr>	
		</thead>
		<tbody>
			@foreach($gallery as $index => $ini)
			<tr>
				<td>{{ $index+1 }}</td>
				<td>
					<img src="{{ url('storage/app/'.$ini->photo) }}" class="img-responsive">
				</td>
				<td>{{ $ini->name }}</td>
				<td>{{ $ini->title }}</td>
				<td>{{ $ini->description }}</td>
				<td>{{ $ini->created_at }}</td>
				<td>
					<span data-toggle="modal" data-target="#myModal">
						<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Edit Picture" onclick="event.preventDefault();document.getElementById('edit{{$ini->id}}').submit();">
						<i class="fa fa-edit"></i>
						</a>
					</span>
					<span data-toggle="modal" data-target="#myModal">
						<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Delete Picture" onclick="event.preventDefault();document.getElementById('delete{{$ini->id}}').submit();">
						<i class="fa fa-times"></i>
						</a>
					</span>
					<form id="delete{{$ini->id}}" action="{{url('admin/gallery/delete')}}" method="POST">
						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$ini->id}}">
						<input type="hidden" name="photo" value="{{$ini->photo}}">
					</form>
					<form id="edit{{$ini->id}}" action="{{url('admin/gallery/edit')}}" method="POST">
						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$ini->id}}">
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