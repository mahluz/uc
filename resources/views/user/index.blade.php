@extends('layouts.admin')
@section('css')

@endsection

@section('content')

<div class="container-fluid">
	
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                User
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> <a href="{{url('admin/dashboard')}}">User List</a>
                </li>
            </ol>
        </div>
    </div><hr>

    <div class="row">
    	<div class="col-lg-12">
	    	<div class="table-responsive">
				<table class="table table-striped" id="table">
	    			<thead>
	    				<tr>
	    					<td>No.</td>
	    					<td>Nama</td>
	    					<td>Hak</td>
	    					<td>Action</td>
	    				</tr>
	    			</thead>
	    			<tbody>
	    				@foreach($users as $index => $ini)
	    				<tr>
	    					<td>{{$index+1}}</td>
	    					<td>{{$ini->name}}</td>
	    					<td>{{$ini->role}}</td>
	    					<td>
	    						<span data-toggle="modal" data-target="#myModal">
									<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Edit User" onclick="event.preventDefault();document.getElementById('edit{{$ini->id}}').submit();">
									<i class="fa fa-edit"></i>
									</a>
								</span>
								<span data-toggle="modal" data-target="#myModal">
									<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Hapus User" onclick="event.preventDefault();document.getElementById('delete{{$ini->id}}').submit();">
									<i class="fa fa-times"></i>
									</a>
								</span>
								<form id="delete{{$ini->id}}" method="POST" action="{{url('admin/user/delete')}}">
									<input type="hidden" name="id" value="{{$ini->id}}">
									{{csrf_field()}}
								</form>
								<form id="edit{{$ini->id}}" method="POST" action="{{url('admin/user/edit')}}">
									<input type="hidden" name="id" value="{{$ini->id}}">
									{{csrf_field()}}
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

@endsection

@section('script')

@endsection