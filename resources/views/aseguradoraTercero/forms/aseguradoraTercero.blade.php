<div class="form-group list-group">
	{!!Form::label('nombre','Nombre *')!!}
	{!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre de la aseguradora'])!!}

	@if ($errors->has('nombre'))
        <span class="list-group-item list-group-item-danger">
             <strong>{{ $errors->first('nombre') }}</strong>
	    </span>
    @endif
</div>