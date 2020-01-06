<h3>Equipo 1</h3>
<div class="form-group">
 	<label>{{ Form::radio('equip1', 'V') }} Cumple</label>
 	<label>{{ Form::radio('equip1', 'X') }} No Cumple</label>
</div>

<h3>Equipo 2</h3>
<div class="form-group">
 	<label>{{ Form::radio('equip2', 'V') }} Cumple</label>
 	<label>{{ Form::radio('equip2', 'X') }} No Cumple</label>
</div>


<h3>Equipo 3</h3>
<div class="form-group">
 	<label>{{ Form::radio('equip3', 'V') }} Cumple</label>
 	<label>{{ Form::radio('equip3', 'X') }} No Cumple</label>
</div>


<h3>Pisos</h3>
<div class="form-group">
 	<label>{{ Form::radio('floor', 'V') }} Cumple</label>
 	<label>{{ Form::radio('floor', 'X') }} No Cumple</label>
</div>

<h3> Paredes</h3>
<div class="form-group">
 	<label>{{ Form::radio('wall', 'V') }} Cumple</label>
 	<label>{{ Form::radio('wall', 'X') }} No Cumple</label>
</div>


<h3>Basurero</h3>
<div class="form-group">
 	<label>{{ Form::radio('dump', 'V') }} Cumple</label>
 	<label>{{ Form::radio('dump', 'X') }} No Cumple</label>
</div>

<h3>Action Correctiva</h3>
<div class="form-group">
 	<label>{{ Form::radio('action', 'V') }} Cumple</label>
 	<label>{{ Form::radio('action', 'X') }} No Cumple</label>
</div>

<h3>Equipo 1</h3>
<div class="form-group">
 	<label>{{ Form::radio('equip1', 'V') }} Cumple</label>
 	<label>{{ Form::radio('equip1', 'X') }} No Cumple</label>
</div>

<h3>Equipo 1</h3>
<div class="form-group">
	<select name="room_id" id="room_id">
	@if(!isset($plant))
	
	<option value=" ">Elija la empresa </option>
	@else
	<option value="{{$plant->room_id}}">{{ $plant->room->name}}</option> 
	@endif
		@foreach($rooms as $room)
		<option value='{{$room->id}}'>{{ $room->name}}</option> 
		@endforeach
    </select>
	</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>




