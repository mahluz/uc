@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Order
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> <a href="{{url('admin/dashboard')}}">Order List</a>
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
    	<div class="col-lg-12">
    		<div class="table-responsive">
    			<table class="table table-striped" id="table">
    				<thead>
    					<tr>
    						<td>No</td>
    						<td>Atas Nama</td>
    						<td>Nomor Meja</td>
    						<td>Status</td>
    						<td>Total Pembayaran</td>
    						<td>Tanggal Order</td>
    						<td>Action</td>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach($order as $index => $ini)
    					<tr>
    						<td>{{ $index+1 }}</td>
    						<td>{{ $ini->atas_nama }}</td>
    						<td>{{ $ini->nomor_meja }}</td>
    						@if($ini->status == "belum dibayar")
    						<td style="color:red">{{ $ini->status }}</td>
    						@else
    						<td>{{ $ini->status }}</td>
    						@endif
    						<td class="harga">{{ $ini->total_pembayaran }}</td>
    						<td>{{ $ini->created_at }}</td>
    						<td>
                                <span data-toggle="modal" onclick="modal({{ $ini->id }})">
                                    <a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="verifikasi pembayaran" onclick="event.preventDefault();document.getElementById('edit{{$ini->id}}').submit();">
                                    <i class="fa fa-edit"></i>
                                    </a>
                                </span>
                                {{-- <span data-toggle="modal" data-target="#myModal"> --}}
                                    <a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Hapus order" onclick="event.preventDefault();document.getElementById('delete{{$ini->id}}').submit();">
                                    <i class="fa fa-times"></i>
                                    </a>
                                {{-- </span> --}}
                                <form id="delete{{$ini->id}}" action="{{url('admin/order/delete')}}" method="POST">
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Verifikasi Pembayaran</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Anda yakin ?</p>
        <button class="btn btn-danger btn-block" onclick="event.preventDefault();document.getElementById('payment_form').submit();">Ya</button>
        <button class="btn btn-warning btn-block" data-dismiss="modal">Tidak</button>
        <form id="payment_form" action="{{ url('admin/order/payment') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="" id="payment_id">
        </form>
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
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

    function modal(id){
        $("#myModal").modal();
        $("#payment_id").val(id);
    }
</script>
@endsection