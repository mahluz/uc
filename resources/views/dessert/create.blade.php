@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
	<hr>
	<div class="panel panel-primary">
		<div class="panel-heading">
			heading
		</div>
		<div class="panel-body">
			<form class="form" action="{{ url('admin/dessert/store') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<span class="label label-default">Name</span>
					<input type="text" class="form-control" name="name" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Description</span>
					<input type="text" class="form-control" name="description" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Ingredient</span>
					<input type="text" class="form-control" name="ingredient" id="ingredient" data-role="tagsinput" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Cost</span>
					<input type="number" class="form-control" name="cost" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Selling price</span>
					<input type="number" class="form-control" name="selling_price" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Photo</span>
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
		$("#ingredient").tagsinput('items');
		$('#validate').validate();
	});
</script>
@endsection