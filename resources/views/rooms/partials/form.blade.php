<div class="form-group">
	{{ Form::label('name', 'Nombre de la sala') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::text('description', null, ['class' => 'form-control', 'id' => 'description']) }}
</div>
<hr>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
