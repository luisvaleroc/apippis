<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<hr>
<h3>Estado</h3>
<div class="form-group">
 	<label>{{ Form::radio('status', 'activo') }} Activo</label>
 	<label>{{ Form::radio('status', 'inactivo') }} Inactivo</label>
</div>
<hr>


<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>