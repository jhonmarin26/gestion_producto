@extends('admin.template.main')
@section('title','FORMULARIO INVESTIGADOR')
@section('content')
						<form class="form-horizontal" role="form" action="{{route('investigador.store')}}" method="POST" autocomplete="off">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Nombres :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_nombre" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Apellidos :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_apellido" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Tipo de documento :</label>
									<div class="col-sm-8">
										<select class="form-control" name="">
											<option>Cedula</option>
											<option>Pasaporte</option>
											<option>Cedula extranjeria</option>
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label"># documento :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_documento" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Email :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_email" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Researgate :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_researchgate" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Orcid :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_orcid" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Scopus :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_scopus" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Google academico :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_googleacademico" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Researchid :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_researchid" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Pais de afiliación :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_paisafiliacion" class="form-control " placeholder="">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label"># afiliación :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_numeroafiliacion" class="form-control" placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label"># horas de investigación :</label>
									<div class="col-sm-8">
										<input type="text" name="inve_horasinvestigacion" class="form-control " placeholder="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Carga horaria :</label>
									<div class="col-sm-8">
										<select class="form-control" name="caho_id">
											@foreach($cargas_horarias as $carga)
												<option value="{{$carga->caho_id}}">{{$carga->caho_descripcion}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Categoria colciencias:</label>
									<div class="col-sm-8">
										<select class="form-control" name="caco_id">
											@foreach($categorias_colciencias as $categoria)
												<option value="{{$categoria->caco_id}}">{{$categoria->caco_descripcion}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>


							<div class="row">
								<div class="form-group">
									<label class="col-sm-2 control-label">Pertenece a :</label>
									<div class="col-sm-10">
										<div class="radio iradio">
											<label>
												<input type="radio" name="optionsRadios" id="optionP"
													onclick="mostrarDependenciaPrograma(this.value)" value="P">
												Un programa academico
											</label>
										</div>
										<div class="radio iradio">
											<label>
												<input type="radio"  name="optionsRadios" id="optionD"
													onclick="mostrarDependenciaPrograma(this.value)" value="D">
												Una dependencia
											</label>
										</div>
									</div>
								</div>
							</div>

							<div class="row" id="rowDependencia" hidden>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Dependencia :</label>
									<div class="col-sm-8">
										<select class="form-control" name="depe_id">
											<option>Administrativa</option>
											<option>Investigacion</option>
											<option>Otra</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row" id="rowPrograma" hidden>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Programa academico :</label>
									<div class="col-sm-8">
										<select class="form-control" name="prog_id">
											<option>Ingenieria</option>
											<option>Derecho</option>
											<option>Psicologia</option>
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="col-sm-4 control-label">Categoria profesor :</label>
									<div class="col-sm-8">
										<select class="form-control" name="capr_id">
											<option>Categ 1</option>
											<option>Categ 2</option>
											<option>Categ 3</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group col-sm-6">
									<button type="submit" class="btn btn-default">Agregar</button>
								</div>
							<br><br><br><br><br><br><br><br><br><br>
						</form>
@endsection
@section('scripts')
<script>
		// funcion show dependencia o programas
		function mostrarDependenciaPrograma(val) {
			console.log("entro " + val);
			switch (val) {
				case "D":
					// mostrar dependencia y ocultar programas
					$("#rowDependencia").show();
					$("#rowPrograma").hide();
					return;

				case "P":
					// mostrar dependencia y ocultar programas
					$("#rowDependencia").hide();
					$("#rowPrograma").show();
					return;
			}

		}
	</script>
@endsection