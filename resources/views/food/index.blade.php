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
			<a href="{{url('admin/food/create')}}"><button type="button" class="btn btn-success">Make new Food</button></a><hr>
			<div class="panel panel-default">
				<div class="panel-heading">
					Food Management
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table id="table" class="table table-bordered">
							<thead>
								<tr>
									<td>No.</td>
									<td>Gambar</td>
									<td>Nama</td>
									<td>content</td>
									<td>Bahan</td>
									<td>Harga Beli</td>
									<td>Harga Jual</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								@foreach($food as $index => $ini)
								<tr>
									<td>{{$index+1}}</td>
									<td><img src="{{url('storage/app/'.$ini->photo)}}" height="100px" width="100px"></td>
									<td>{{$ini->name}}</td>
									<td>{{$ini->description}}</td>
									<td><input type="text" data-role="tagsinput" id="ingredient" value="{{$ini->ingredient}}" disabled></td>
									<td class="harga">{{$ini->cost}}</td>
									<td class="harga">{{$ini->selling_price}}</td>
									<td>
										<span data-toggle="modal" data-target="#myModal">
											<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Edit Makanan" onclick="event.preventDefault();document.getElementById('edit{{$ini->id}}').submit();">
											<i class="fa fa-edit"></i>
											</a>
										</span>
										<span data-toggle="modal" data-target="#myModal">
											<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Hapus Makanan" onclick="event.preventDefault();document.getElementById('delete{{$ini->id}}').submit();">
											<i class="fa fa-times"></i>
											</a>
										</span>
										<form id="delete{{$ini->id}}" action="{{url('admin/food/delete')}}" method="POST">
											{{csrf_field()}}
											<input type="hidden" name="id" value="{{$ini->id}}">
											<input type="hidden" name="photo" value="{{$ini->photo}}">
										</form>
										<form id="edit{{$ini->id}}" action="{{url('admin/food/edit')}}" method="POST">
											{{csrf_field()}}
											<input type="hidden" name="id" value="{{$ini->id}}">
											<input type="hidden" name="photo" value="{{$ini->photo}}">
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$("#ingredient").tagsinput({
			freeInput:false,
		});
		$('.harga').formatCurrency({ colorize:true, region: 'id-ID' });
	});
</script>
@endsection