<div class="form-group">
	{{ Form::label('mask', 'Mascarilla cubre la nariz') }}
	{{ Form::text('mask', null, ['class' => 'form-control', 'id' => 'mask']) }}
</div>
<div class="form-group">
	{{ Form::label('wound', 'Ausencia de heridas') }}
	{{ Form::text('wound', null, ['class' => 'form-control', 'id' => 'wound']) }}
</div>

<div class="form-group">
	{{ Form::label('makeup', 'Susencia de maquillaje') }}
	{{ Form::text('makeup', null, ['class' => 'form-control', 'id' => 'makeup']) }}
</div>

<div class="form-group">
	{{ Form::label('jewelry', 'Ausencia de joyas') }}
	{{ Form::text('jewelry', null, ['class' => 'form-control', 'id' => 'jewelry']) }}
</div>

<div class="form-group">
	{{ Form::label('ear', 'Cofia cubre las orejas') }}
	{{ Form::text('ear', null, ['class' => 'form-control', 'id' => 'ear']) }}
</div>

<div class="form-group">
	{{ Form::label('shoe', 'Zapatos Limpios') }}
	{{ Form::text('shoe', null, ['class' => 'form-control', 'id' => 'shoe']) }}
</div>

<div class="form-group">
	{{ Form::label('hair', 'Pelo corto / tomado') }}
	{{ Form::text('hair', null, ['class' => 'form-control', 'id' => 'hair']) }}
</div>

<div class="form-group">
	{{ Form::label('nail', 'Uñas cortas') }}
	{{ Form::text('nail', null, ['class' => 'form-control', 'id' => 'nail']) }}
</div>
<div class="form-group">
	{{ Form::label('uniform', 'Uniforme completo y limpio') }}
	{{ Form::text('uniform', null, ['class' => 'form-control', 'id' => 'uniform']) }}
</div>

<div class="form-group">
	{{ Form::label('rut', 'Rut empleado') }}
	{{ Form::text('rut', null, ['class' => 'form-control', 'id' => 'rut']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

