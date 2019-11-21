<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	
	{{ Form::label('name', 'Correo') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}

	{{ Form::label('name', 'Empresa') }}
	{{ Form::text('company', null, ['class' => 'form-control', 'id' => 'company']) }}

	{{ Form::label('name', 'Financiamiento') }}
	{{ Form::text('funding', null, ['class' => 'form-control', 'id' => 'funding']) }}

	{{ Form::label('name', 'Newsletter') }}
	{{ Form::text('newsletter', null, ['class' => 'form-control', 'id' => 'newsletter']) }}

</div>
<hr>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>