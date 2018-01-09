@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<div class="container-fluid">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Report
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> <a href="{{url('admin/dashboard')}}">Uang panas</a>
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
    	<div class="col-lg-12">
            <form class="form">
                <div class="form-group">
                    <label>Keuangan:</label>
                    <select class="form-control">
                        @foreach ($report as $index => $ini)
                            <option>{{ date('M Y',strtotime( $ini->monthyear )) }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
    		<canvas id="myChart" width="400" height="400"></canvas>
    	</div>
    </div>

</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ url('public/js/Chart.js') }}"></script>
<script type="text/javascript">
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["januari", "februari", "maret", "april", "mei", "juni"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
@endsection