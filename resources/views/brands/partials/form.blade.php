<div class="form-group">
	{{ Form::label('name', 'Nombre de la empresa') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('sector', 'Sector') }}
	{{ Form::text('sector', null, ['class' => 'form-control', 'id' => 'sector']) }}
</div>

<hr>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>