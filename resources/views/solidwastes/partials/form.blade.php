<div class="form-group">
	{{ Form::label('paper', 'Papel archivo') }}
	{{ Form::text('paper', null, ['class' => 'form-control', 'id' => 'paper']) }}
</div>
<div class="form-group">
	{{ Form::label('paperboard', 'Carton') }}
	{{ Form::text('paperboard', null, ['class' => 'form-control', 'id' => 'paperboard']) }}
</div>

<div class="form-group">
	{{ Form::label('plastic', 'Plastico') }}
	{{ Form::text('plastic', null, ['class' => 'form-control', 'id' => 'plastic']) }}
</div>
<div class="form-group">
	{{ Form::label('pvc', 'PVC') }}
	{{ Form::text('pvc', null, ['class' => 'form-control', 'id' => 'pvc']) }}
</div>

<div class="form-group">
	{{ Form::label('scrap', 'Chatarra') }}
	{{ Form::text('scrap', null, ['class' => 'form-control', 'id' => 'scrap']) }}
</div>
<div class="form-group">
	{{ Form::label('paperboard', 'Carton') }}
	{{ Form::text('paperboard', null, ['class' => 'form-control', 'id' => 'paperboard']) }}
</div>


<div class="form-group">
	{{ Form::label('glass', 'Vidrio') }}
	{{ Form::text('glass', null, ['class' => 'form-control', 'id' => 'glass']) }}
</div>
<div class="form-group">
	{{ Form::label('food', 'Desechos de comida y fruta') }}
	{{ Form::text('food', null, ['class' => 'form-control', 'id' => 'food']) }}
</div>

<div class="form-group">
	{{ Form::label('ordinary', 'Ordinarios') }}
	{{ Form::text('ordinary', null, ['class' => 'form-control', 'id' => 'ordinary']) }}
</div>
<hr>

<div class="form-group">
	{{ Form::label('observation', 'Observación') }}
	{{ Form::text('observation', null, ['class' => 'form-control', 'id' => 'observation']) }}
</div>


<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
