@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
<hr>
<div class="panel panel-primary">
	<div class="panel-heading">
		Promotion Form
	</div>
	<div class="panel-body">
		<form class="form" method="post" action="{{ url('admin/promotion/store') }}" enctype="multipart/form-data">
			<div class="form-group">
				<span class="label label-default">Food Name</span>
				<input type="text" class="form-control" name="item" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Description</span>
				<textarea class="form-control" name="content" required=""></textarea>
			</div>
			<div class="form-group">
				<span class="label label-default">Price</span>
				<input type="number" class="form-control" name="price" required>
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