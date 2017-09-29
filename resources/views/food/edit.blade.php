@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<hr>
	<a href="{{ url('admin/food') }}"><button type="button" class="btn btn-primary">Back</button></a>
	<hr>

	<div class="panel panel-primary">
		<div class="panel-heading">
			Food Edit
		</div>
		<div class="panel-body">
			<form class="form" action="{{ url('admin/food/update') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<span class="label label-default">Nama Makanan</span>
					<input type="text" class="form-control" name="name" value="{{ $food->name }}" required>
					<div class="form-group">
						<span class="label label-default">Deskripsi</span>
						<input type="text" class="form-control" name="description" value="{{ $food->description }}" required>
					</div>
					<div class="form-group">
						<span class="label label-default">Bahan Makanan</span>
						<input type="text" class="form-control" name="ingredient" id="ingredient" data-role="tagsinput" value="{{ $food->ingredient }}" required>
					</div>
					<div class="form-group">
						<span class="label label-default">Harga Beli</span>
						<input type="number" class="form-control" name="cost" value="{{ $food->cost }}" required>
					</div>
					<div class="form-group">
						<span class="label label-default">Harga Jual</span>
						<input type="number" class="form-control" name="selling_price" value="{{ $food->selling_price }}" required>
					</div>
					<div class="form-group">
						<span class="label label-default">Upload Gambar</span>
						<img src="{{ url('storage/app/'.$food->photo) }}" class="img-responsive">
						<input type="file" name="photo">
					</div>
					{{csrf_field()}}
					<input type="hidden" name="id" value="{{ $food->id }}">
					<input type="hidden" name="old_photo" value="{{ $food->photo }}">
					<button type="submit" class="btn btn-success btn-block">Submit</button>
				</div>
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