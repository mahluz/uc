@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<hr>
	<div class="panel panel-default">
		<div class="panel-heading">
			Lorem
		</div>
		<div class="panel-body">
			<form class="form" method="post" enctype="multipart/form-data" action="{{url('admin/promotion/update')}}">
				<div class="form-group">
					<span class="label label-default">Title</span>
					<input type="text" class="form-control" name="item" value="{{$promotion->item}}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Description</span>
					<textarea class="form-control" name="content" required>{{$promotion->content}}</textarea>
				</div>
				<div class="form-group">
					<span class="label label-default">Price</span>
					<input type="text" class="form-control" name="price" value="{{$promotion->price}}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">change if you want</span>
					<input type="file" name="photo">
					<img src="{{url('storage/app/'.$photo)}}" class="img-responsive">
				</div>
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$promotion->id}}">
				<input type="hidden" name="old_photo" value="{{$promotion->photo}}">
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