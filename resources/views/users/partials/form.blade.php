<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<select name="brand_id" id="brand_id">
	@if($user->brand=== null)

	<option value=" ">Elija la empresa </option>
	@else
	<option value="{{$user->brand_id}}">{{ $user->brand->name}}</option> 
	@endif
		@foreach($brands as $brand)
		<option value='{{$brand->id}}'>{{ $brand->name}}</option> 
		@endforeach
    </select>

	<h3>¿El Usuario es dueño?</h3>
<div class="form-group">
 	<label>{{ Form::radio('owner', 'si') }} Si</label>
 	<label>{{ Form::radio('owner', ' ') }} No</label>
</div>


<hr>
<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
	    <li>
	        <label>
	        {{ Form::checkbox('roles[]', $role->id, null) }}
	        {{ $role->name }}
	        <em>({{ $role->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>