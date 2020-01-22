
<h3>Mascarilla cubre la nariz</h3>
<div class="form-group">
 	<label>{{ Form::radio('mask', 'V') }} Cumple</label>
 	<label>{{ Form::radio('mask', 'X') }} No Cumple</label>
</div>
<h3>Ausencia de heridas</h3>
<div class="form-group">
 	<label>{{ Form::radio('wound', 'V') }} Cumple</label>
 	<label>{{ Form::radio('wound', 'X') }} No Cumple</label>
</div>

<h3>Susencia de maquillaje</h3>
<div class="form-group">
 	<label>{{ Form::radio('makeup', 'V') }} Cumple</label>
 	<label>{{ Form::radio('makeup', 'X') }} No Cumple</label>
</div>




<h3>Ausencia de joyas</h3>
<div class="form-group">
 	<label>{{ Form::radio('jewelry', 'V') }} Cumple</label>
 	<label>{{ Form::radio('jewelry', 'X') }} No Cumple</label>
</div>


<h3>Cofia cubre las orejas</h3>
<div class="form-group">
 	<label>{{ Form::radio('ear', 'V') }} Cumple</label>
 	<label>{{ Form::radio('ear', 'X') }} No Cumple</label>
</div>

<h3>Zapatos Limpios</h3>
<div class="form-group">
 	<label>{{ Form::radio('shoe', 'V') }} Cumple</label>
 	<label>{{ Form::radio('shoe', 'X') }} No Cumple</label>
</div>


<h3>Pelo corto / tomado</h3>
<div class="form-group">
 	<label>{{ Form::radio('hair', 'V') }} Cumple</label>
 	<label>{{ Form::radio('hair', 'X') }} No Cumple</label>
</div>
<h3>Uñas cortas</h3>
<div class="form-group">
 	<label>{{ Form::radio('nail', 'V') }} Cumple</label>
 	<label>{{ Form::radio('nail', 'X') }} No Cumple</label>
</div>


<h3>Uniforme completo y limpio</h3>
<div class="form-group">
 	<label>{{ Form::radio('uniform', 'V') }} Cumple</label>
 	<label>{{ Form::radio('uniform', 'X') }} No Cumple</label>
</div>


@if(!isset($cleaning) )
<div class="form-group">
	{{ Form::label('rut', 'Rut empleado') }}
	{{ Form::text('rut', null, ['class' => 'form-control', 'id' => 'rut']) }}
</div>
@endif

<div class="form-group">
	{{ Form::label('observation', 'Observación') }}
	{{ Form::text('observation', null, ['class' => 'form-control', 'id' => 'observation']) }}
</div>

<div class="form-group">
{!! Form::label('photo', 'Tomar Foto') !!}
    {!! Form::file('photo', ['capture' => 'camera']) !!}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>




