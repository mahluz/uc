@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
<hr>
<a href="{{ url('admin/dessert') }}"><button type="button" class="btn btn-primary">Back</button></a>
<hr>

<div class="panel panel-primary">
	<div class="panel-heading">
		Edit Dessert
	</div>
	<div class="panel-body">
		<form class="form" action="{{ url('admin/dessert/update') }}" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<span class="label label-default">Name</span>
				<input type="text" class="form-control" name="name" value="{{ $dessert->name }}" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Description</span>
				<input type="text" class="form-control" name="description" value="{{ $dessert->description }}" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Ingredient</span>
				<input type="text" class="form-control" name="ingredient" id="ingredient" data-role="tagsinput" value="{{ $dessert->ingredient }}" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Cost</span>
				<input type="number" class="form-control" name="cost" value="{{ $dessert->cost }}" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Selling price</span>
				<input type="number" class="form-control" name="selling_price" value="{{ $dessert->selling_price }}" required>
			</div>
			<div class="form-group">
				<span class="label label-default">Photo</span>
				<img src="{{ url('storage/app/'.$dessert->photo) }}" class="img-responsive">
				<input type="file" name="photo" required>
			</div>
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $dessert->id }}">
			<input type="hidden" name="old_photo" value="{{ $dessert->photo }}">
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