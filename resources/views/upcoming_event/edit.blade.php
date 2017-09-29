@extends('layouts.admin')
@section('css')

@endsection
@section('content')

<div class="container-fluid">
	<hr>
	<div class="panel panel-default">
		<div class="panel-heading">
			Change Upcoming Event
		</div>
		<div class="panel-body">
			<form class="form" method="post" action="{{url('admin/upcomingEvent/update')}}" enctype="multipart/form-data">
				<div class="form-group">
					<span class="label label-default">Title</span>
					<input type="text" name="item" class="form-control" value="{{$upcoming_event->item}}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Content</span>
					<textarea class="form-control" name="content" required>{{$upcoming_event->content}}</textarea>
				</div>
				<div class="form-group">
					<span class="label label-default">Place</span>
					<input type="text" name="place" class="form-control" value="{{$upcoming_event->place}}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Date</span>
					<input type="text" name="date" class="form-control" value="{{$upcoming_event->date}}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Change photo if you want</span>
					<input type="file" name="photo">
					<img src="{{url('storage/app/'.$upcoming_event->photo)}}" class="img-responsive">
				</div>
				{{csrf_field()}}
				<input type="hidden" name="old_photo" value="{{$upcoming_event->photo}}">
				<input type="hidden" name="id" value="{{$upcoming_event->id}}">
				<button type="submit" class="btn btn-success btn-block">Submit</button>
			</form>
		</div>
	</div>

</div>

@endsection
@section('script')
<script type="text/javascript">
	
$(document).ready(function(){

$('.form').validate();

});

</script>
@endsection