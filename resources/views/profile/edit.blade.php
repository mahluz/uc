@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<hr>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Form Cicing
		</div>
		<div class="panel-body">
			<form class="form" action="{{ url('admin/profile/update') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<span class="label label-default">Nama</span>
					<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Change Photo</span>
					<input type="file" name="photo">
					<img src="{{ url('storage/app/'.Auth::user()->photo) }}" class="img-responsive">
				</div>
				{{ csrf_field() }}
				<input type="hidden" name="old_photo" value="{{ Auth::user()->photo }}">
				<button type="submit" class="btn btn-success btn-block">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		// $("#ingredient").tagsinput('items');
		$('.form').validate();
	});
</script>
@endsection