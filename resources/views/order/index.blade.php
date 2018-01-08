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
    						<td></td>
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
<script type="text/javascript">
	$(document).ready(function(){
		$("#ingredient").tagsinput({
			freeInput:false,
		});
		$('.harga').formatCurrency({ colorize:true, region: 'id-ID' });
	});
</script>
@endsection