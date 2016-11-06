@extends('layouts.app')

@section('htmlheader_title')
	Encuesta
@endsection


@section('main-content')
	<div class="container spark-screen">
		@if(session()->has('msg'))
			<div class="{{session('css')}}" role="alert">{{session('msg')}}</div>
		@endif

		<a href="{{url('admin/alternativa/'.$pregunta->idPreguntas.'/create')}}"class="btn btn-primary btn-sm" title="Nueva encuesta">Nueva Alternativa</a>
		<br>

		<p> <strong>Pregunta :</strong> {{$pregunta->descripcion}}</p>

		@if(!empty($dataAlternativa))
		<div class="table-responsive">
			<table class="table">
				<thead>
					<th>Id</th>
					<th>Descripcion</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>
				<tbody>
				    @foreach($dataAlternativa as $key => $reg)
					<tr>
						<td>{{$reg->idPreguntas}}</td>
						<td>{{$reg->descripcion}}</td>
						<td>{{!empty($reg->estado)? 'activo': 'baja'}}</td>
						<td>
							<a href="{{url('admin/alternativa/'.$reg->idAlternativas.'/edit')}}" class="btn btn-warning btn-xs" title="Editar">Editar</a>
							<form action="{{route('admin.alternativa.destroy', $reg->idAlternativas)}}" method="POST">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
							    <input type="submit" class="btn btn-danger btn-xs" title="Eliminar" value="Eliminar"></a>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
        @endif
	</div>
@endsection
