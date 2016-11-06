@extends('layouts.app')

@section('htmlheader_title')
	Encuesta
@endsection


@section('main-content')
	<div class="container-fluid">
		<h3 style="text-align: center"><strong>Formulario de Encuesta</strong></h3>

		<h4><strong>{{$encuesta->descripcion}}</strong></h4><br>
		@if(session()->has('msg'))
			<div class="{{session('css')}}" role="alert">{{session('msg')}}</div>
		@endif
		@if(!empty($dataPreguntas))
		<form  action="{{url('encuesta/store')}}" method="POST">
			{{csrf_field()}}

			@foreach($dataPreguntas as $key => $pregunta)
			<p style="font-size: 16px;">
				<span style="text-align: left"><strong>{{$pregunta->order. ') '.$pregunta->descripcion}}</strong></span><br>
				@foreach($pregunta->alternativas as $key => $alternativa)
					<label style="font-weight: normal; margin-left:1%;width: 29%">
						<input  type="radio" name="alternativas_{{$pregunta->idPreguntas}}" value="{{$alternativa->idAlternativas}}">
						{{$alternativa->descripcion}}
						@if(!empty($alternativa->showInput))
						<input  type="text" name="alternativasText_{{$pregunta->idPreguntas}}" value="">
						@endif
					</label>
				@endforeach
			</p>
			@endforeach

			<button type="submit" class="btn btn-primary">Guardar Encuesta</button>
		</form>
		@endif

	</div>
@endsection
