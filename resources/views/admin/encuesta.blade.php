@extends('layouts.app')

@section('htmlheader_title')
	Encuesta
@endsection


@section('main-content')
	<div class="container spark-screen">
		@if(session()->has('msg'))
			<div class="{{session('css')}}" role="alert">{{session('msg')}}</div>
		@endif
		<a href="{{url('admin/encuesta/create')}}"class="btn btn-primary btn-sm" title="Nueva encuesta">Nuevo encuesta</a>
		<br>
		@if(!empty($dataEncuesta))
		<div class="table-responsive">
			<table class="table">
				<thead>
					<th>Id</th>
					<th>Descripcion</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>
				<tbody>
				    @foreach($dataEncuesta as $key => $reg)
					<tr>
						<td width="5%">{{$reg->idEncuestas}}</td>
						<td width="55%">{{$reg->descripcion}}</td>
						<td width="10%">{{!empty($reg->estado)? 'activo': 'baja'}}</td>
						<td width="30%">
							<a href="{{url('admin/pregunta/'.$reg->idEncuestas)}}" class="btn btn-info btn-xs" title="Crear Pregunta">Crear Preguntas</a>
							<a href="{{url('admin/encuesta/'.$reg->idEncuestas.'/edit')}}" class="btn btn-warning btn-xs" title="Editar">Editar</a>
							<form action="{{route('admin.encuesta.destroy', $reg->idEncuestas)}}" method="POST">
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
