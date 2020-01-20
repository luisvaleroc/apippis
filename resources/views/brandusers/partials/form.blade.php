<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Correo') }}
	{{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
	{{ Form::label('phone', 'Telefono') }}
	{{ Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone']) }}
</div>
<div class="form-group">
	{{ Form::label('password', 'Contraseña') }}
	<br/>
	<input type="password" name="password2"><br>
</div>

<select name="store_id" id="store_id">
	 


	@if (!isset($user) or $user->store=== null or !isset($user) )

	<option value=" ">Elija un Local </option>
	@else
	<option value="{{$user->store_id}}">{{ $user->store->name}}</option> 
	@endif
	<option value=" ">Dejar sin local </option>

		@foreach($stores as $store)
		<option value='{{$store->id}}'>{{ $store->name}}</option> 
		@endforeach
    </select>



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
@if (isset($id))
    {!! Form::hidden('emeailvalida', $user->id) !!}
@endif
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>