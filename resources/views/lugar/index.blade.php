@extends('layouts.headerFooter')
@include ('layouts.menuHeader') 
@section('content')
@include ('layouts.scripts')
@include ('dataTable.scriptDataTable2')

<div class="container">

	<div class="banner-data">

		<h1><center>Lista de Lugares de audiencia</center></h1>
          <br>
          
		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('lugar.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre de Lugar de audiencia</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($lugares as $lugar)
					 
						<tr><td>{{$lugar->nombre}}</td>
						<td> <div class="twoColumns col-md-12">
						{!!link_to_route('lugar.edit', $title = 'Modificar', $parameters = $lugar->idLugar, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['lugar.destroy',$lugar->idLugar],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop