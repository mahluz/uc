@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
	<hr>
	<a href="{{ url('admin/gallery') }}"><button type="button" class="btn btn-primary">Back</button></a>
	<hr>

	<div class="panel panel-primary">
		<div class="panel-heading">
			Gallery form
		</div>
		<div class="panel-body">
			<form class="form" action="{{ url('admin/gallery/store') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<span class="label label-default">Title</span>
					<input type="text" class="form-control" name="title" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Description</span>
					<textarea class="form-control" name="description" required></textarea>
				</div>
				<div class="form-group">
					<span class="label label-default">Select pic</span>
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

$('.form').validate();

});

</script>
@endsection