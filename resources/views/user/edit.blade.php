@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<hr>
	<a href="{{ url('admin/user') }}"><button type="button" class="btn btn-primary">Back</button></a>
	<hr>

	<div class="panel panel-primary">
		<div class="panel-heading">
			Form User
		</div>
		<div class="panel-body">
			<form class="form" action="{{ url('admin/user/update') }}" method="post">
				<div class="form-group">
					<span class="label label-default">Nama</span>
					<input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Email</span>
					<input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Hak</span>
					<select class="form-control" name="role">
						@foreach($role as $index => $ini)
						<option value="{{ $ini->id }}">{{ $ini->role }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<span class="label label-default">Password</span>
					<input id="password" type="password" class="form-control" name="password" required>
				</div>
				<div class="form-group">
					<span class="label label-default">Confirm Password</span>
					<input id="password-confirm" type="password" class="form-control" name="password_confirm" required>
				</div>
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $user->id }}">
				<button type="submit" class="btn btn-success btn-block">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	
$(document).ready(function(){

	$('.form').validate({
		rules:	{
			password_confirm:{
				equalTo: "#password"
			}
		}	
	});

});

</script>
@endsection