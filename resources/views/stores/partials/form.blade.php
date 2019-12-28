<div class="form-group">
	{{ Form::label('name', 'Nombre del local') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('address', 'Direccion') }}
	{{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address']) }}
</div>


<hr>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>