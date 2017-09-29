@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
	<hr>
	<div class="panel panel-default">
		<div class="panel-heading">
			News
		</div>
		<div class="panel-body">
			<form class="form" action="{{ url('admin/news/update') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<span class="label label-default">Title</span>
					<input type="text" class="form-control" name="title" value="{{ $news->title }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Description</span>
					<textarea class="form-control" name="description" required>{{ $news->description }}</textarea>
				</div>
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $news->id }}">
				<button type="submit" class="btn btn-success btn-block">Submit</button>
			</form>
		</div>

	</div>

</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#validate').validate();
	});
</script>
@endsection