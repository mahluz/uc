@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Food
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> <a href="{{url('admin/dashboard')}}">Food List</a>
                </li>
            </ol>
        </div>
    </div><hr>

    <div class="row">
    	<div class="col-lg-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				Form
    			</div>
    			<div class="panel-body">
    				<form action="{{url('admin/food/store')}}" id="validate" enctype="multipart/form-data" method="post">
    					<div class="form-group">
    						<span class="label label-default">Nama Makanan</span>
    						<input type="text" class="form-control" name="name" required>
    					</div>
    					<div class="form-group">
    						<span class="label label-default">Deskripsi</span>
    						<input type="text" class="form-control" name="description" required>
    					</div>
    					<div class="form-group">
    						<span class="label label-default">Bahan Makanan</span>
    						<input type="text" class="form-control" name="ingredient" id="ingredient" data-role="tagsinput" required>
    					</div>
    					<div class="form-group">
    						<span class="label label-default">Harga Beli</span>
    						<input type="number" class="form-control" name="cost" required>
    					</div>
    					<div class="form-group">
    						<span class="label label-default">Harga Jual</span>
    						<input type="number" class="form-control" name="selling_price" required>
    					</div>
    					<div class="form-group">
    						<span class="label label-default">Upload Gambar</span>
    						<input type="file" name="photo" required>
    					</div>
    					{{csrf_field()}}
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
		$("#ingredient").tagsinput('items');
		$('#validate').validate();
	});
</script>
@endsection