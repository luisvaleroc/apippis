<div class="form-group">
	{{ Form::label('name', 'Nombre de la empresa') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<select name="sector" id="sector">
	@if(!isset($brand->sector))

		<option value=" ">Sector al que pertenece la empresa</option>
	@else
		<option value="{{$brand->sector_id}}">{{ $brand->sector->name}}</option> 
	@endif
	@foreach($sectors as $sector)
		<option value='{{$sector->id}}'>{{ $sector->name}}</option> 
	@endforeach
</select>
<hr>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>