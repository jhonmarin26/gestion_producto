@extends('admin.template.main')
@section('content')
<a href="{{route('proyecto.create')}}">
	<button type="button" class="btn btn-success btn-block">Registrar</button>
</a>
<table border="1">
	@foreach($proyectos as $proyecto)
	<tr>
		<td>{{$proyecto->proy_nombre}}</td>
	</tr>
	@endforeach
</table>
@endsection