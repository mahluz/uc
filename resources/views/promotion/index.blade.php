@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<hr>
	<a href="{{url('admin/promotion/create')}}"><button type="button" class="btn btn-primary">Add Promotion</button></a>
	<hr>

	<div class="table-responsive">

		<table id="table" class="table table-striped">
			<thead>
				<tr>
					<td>No</td>
					<td>Image</td>
					<td>Food Name</td>
					<td>Description</td>
					<td>Price</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($promotion as $index => $ini)
				<tr>
					<td>{{$index+1}}</td>
					<td><img src="{{url('storage/app/'.$ini->photo)}}" height="100px" width="100px"></td>
					<td>{{$ini->item}}</td>
					<td>{{$ini->content}}</td>
					<td class="harga">{{$ini->price}}</td>
					<td>
						<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Change" onclick="event.preventDefault();document.getElementById('edit{{$ini->id}}').submit();">
						<i class="fa fa-magic"></i>
						</a>
						<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Delete" onclick="event.preventDefault();document.getElementById('delete{{$ini->id}}').submit();">
						<i class="fa fa-times"></i>
						</a>
						<form id="edit{{$ini->id}}" action="{{url('admin/promotion/edit')}}" method="POST">
							{{csrf_field()}}
							<input type="hidden" name="id" value="{{$ini->id}}">
							<input type="hidden" name="photo" value="{{$ini->photo}}">
						</form>
						<form id="delete{{$ini->id}}" action="{{url('admin/promotion/delete')}}" method="POST">
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
@endsection
@section('script')

<script type="text/javascript">
	
$(document).ready(function(){
	// console.log("yey");
	$('.harga').formatCurrency({ colorize:true, region: 'id-ID' });
});

</script>

@endsection