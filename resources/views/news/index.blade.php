@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	
	<hr>
	<a href="{{ url('admin/news/create') }}"><button type="button" class="btn btn-primary">Write News</button></a>
	<hr>

	<div class="panel panel-primary">
		<div class="panel-heading">
			News
		</div>
		<div class="panel-body">
			<div class="table-responsive">
			<table class="table table-bordered" id="table">
				<thead>
					<tr>
						<td>Creator</td>
						<td>Title</td>
						<td>Description</td>
						<td>Created at</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					@foreach($news as $index => $ini)
					<tr>
						<td>{{ $ini->name }}</td>
						<td>{{ $ini->title }}</td>
						<td>{{ str_limit($ini->description,200) }}</td>
						<td>{{ $ini->created_at }}</td>
						<td>
							<span data-toggle="modal" data-target="#myModal{{ $ini->id }}">
								<a href="#" class="btn btn-xs btn-default" data-toggle="tooltip" data-pacement="top" title="View this post">
									<i class="fa fa-search"></i>
								</a>
							</span>
							<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Edit News" onclick="event.preventDefault();document.getElementById('edit{{$ini->id}}').submit();">
							<i class="fa fa-edit"></i>
							</a>
							<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Delete News" onclick="event.preventDefault();document.getElementById('delete{{$ini->id}}').submit();">
							<i class="fa fa-times"></i>
							</a>
							<form id="delete{{$ini->id}}" action="{{url('admin/news/delete')}}" method="POST">
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$ini->id}}">
							</form>
							<form id="edit{{$ini->id}}" action="{{url('admin/news/edit')}}" method="POST">
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$ini->id}}">
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

{{-- every modal placed here --}}
@foreach($news as $index => $ini)
<!-- Modal -->
<div id="myModal{{ $ini->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{ $ini->title }}</h4>
      </div>
      <div class="modal-body">
        <p>{{ $ini->description }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endforeach

@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){

});

</script>
@endsection