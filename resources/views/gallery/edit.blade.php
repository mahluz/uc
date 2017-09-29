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
			<form class="form" action="{{ url('admin/gallery/update') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<span class="label label-default">Title</span>
					<input type="text" class="form-control" name="title" value="{{ $gallery->title }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Description</span>
					<textarea class="form-control" name="description" required>{{ $gallery->description }}</textarea>
				</div>
				<div class="form-group">
					<span class="label label-default">Select pic</span>
					<input type="file" name="photo">
					<img src="{{ url('storage/app/'.$gallery->photo) }}" class="img-responsive">
				</div>
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $gallery->id }}">
				<input type="hidden" name="old_photo" value="{{ $gallery->photo }}">
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