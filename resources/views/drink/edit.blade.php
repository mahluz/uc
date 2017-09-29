@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
	<hr>
	<a href="{{ url('admin/drink') }}"><button type="button" class="btn btn-primary">Back</button></a>
	<hr>
	<div class="panel panel-default">
		<div class="panel-heading">
			Form Drink
		</div>
		<div class="panel-body">
			<form class="form" action="{{ url('admin/drink/update') }}" enctype="multipart/form-data" method="POST" id="form">
				<div class="form-group">
					<span class="label label-default">Nama Minuman: </span>
					<input type="text" class="form-control" name="name" value="{{ $drink->name }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Deskripsi: </span>
					<input type="text" class="form-control" name="description" value="{{ $drink->description }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Harga Beli: </span>
					<input type="number" class="form-control" name="cost" value="{{ $drink->cost }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Harga Jual: </span>
					<input type="number" class="form-control" name="selling_price" value="{{ $drink->selling_price }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Upload gambar: </span>
					<img src="{{ url('storage/app/'.$drink->photo) }}" class="img-responsive">
					<input type="file" name="photo">
				</div>
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $drink->id }}">
				<input type="hidden" name="old_photo" value="{{ $drink->photo }}">
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