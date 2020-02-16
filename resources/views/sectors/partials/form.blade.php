<div class="form-group">
	{{ Form::label('name', 'Nombre del sector') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<hr>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>