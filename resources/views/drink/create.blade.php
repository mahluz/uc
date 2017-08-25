@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Form Drink
				</div>
				<div class="panel-body">
					<form class="form" action="" method="POST" id="form">
						<div class="form-group">
							<span class="label label-default">Nama Minuman: </span>
							<input type="text" class="form-control" name="name" required>
						</div>
						<div class="form-group">
							<span class="label label-default">Deskripsi: </span>
							<input type="text" class="form-control" name="description" required>
						</div>
						<div class="form-group">
							<span class="label label-default">Harga Beli: </span>
							<input type="number" class="form-control" name="cost" required>
						</div>
						<div class="form-group">
							<span class="label label-default">Harga Jual: </span>
							<input type="number" class="form-control" name="selling_price" required>
						</div>
						<div class="form-group">
							<span class="label label-default">Upload gambar: </span>
							<input type="file" name="photo">
						</div>
						<button type="submit" class="btn btn-success btn-block">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	
$(document).ready(function(){
	$("#form").validate();
});

</script>
@endsection