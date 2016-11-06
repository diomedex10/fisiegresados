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

			<form action="{{url('admin/alternativa/store')}}" method="POST">
				{{csrf_field()}}
				<input type="hidden" name="idPreguntas" value="{{$pregunta->idPreguntas}}">
				<div class="form-group">
					<label for="descripcion">Descripcion</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
					@if($errors->has('descripcion'))
						<p class="bg-danger">{{$errors->first('descripcion')}}</p>
					@endif
				</div>

				<div class="form-group">
					<label for="estado">Estado</label>
					<select class="form-control" id="estado" name="estado">
						<option value="">Seleccione</option>
						@foreach($states as $key => $value)
						<option value="{{$key}}">{{$value}}</option>
					    @endforeach
					</select>
					@if($errors->has('descripcion'))
						<p class="bg-danger">{{$errors->first('estado')}}</p>
					@endif
				</div>

				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>
@endsection
