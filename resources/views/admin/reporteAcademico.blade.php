@extends('layouts.app')

@section('htmlheader_title')
	Encuesta
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			@if(session()->has('msg'))
				<div class="{{session('css')}}" role="alert">{{session('msg')}}</div>
			@endif
			<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		</div>
	</div>
	<script>
		$(function () {
			Highcharts.chart('container', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Estadistica situacion Academica'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: true,
							format: '<b>{point.name}</b>: {point.percentage:.1f} %',
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
							}
						}
					}
				},
				series: [{
					name: 'Brands',
					colorByPoint: true,
					data: [{
						name: 'Bachiller',
						y: 55.33
					}, {
						name: 'Maestria',
						y: 20.00,
						sliced: true,
						selected: true
					},{
						name: 'Diplomados',
						y: 24.36,
						sliced: true,
						selected: true
					}]
				}]
			});
		});
	</script>
@endsection