@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
<hr>
<div class="panel panel-primary">
	<div class="panel-heading">
		Event Form
	</div>
	<div class="panel-body">
		<form class="form" method="post" action="{{ url('admin/upcomingEvent/store') }}" enctype="multipart/form-data">
			<div class="form-group">
				<span class="label label-default">Title</span>
				<input type="text" class="form-control" name="item" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Content</span>
				<textarea class="form-control" name="content" required=></textarea>
			</div>
			<div class="form-group">
				<span class="label label-default">Place</span>
				<input type="place" class="form-control" name="place" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Date</span>
				<input type="text" class="form-control" name="date" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Select Picture</span>
				<input type="file" name="photo" required>
			</div>
			{{ csrf_field() }}
			<button type="submit" class="btn btn-success btn-block">Submit</button>
		</form>
	</div>
</div>

</div>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){

$(".form").validate();

});
</script>
@endsection