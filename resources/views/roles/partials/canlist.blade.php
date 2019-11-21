@can('roles.show')
<td width="10px">
    <a href="{{ route('roles.show', $role->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('roles.edit')
<td width="10px">
    <a href="{{ route('roles.edit', $role->id) }}" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>
@endcan
@can('roles.destroy')
<td width="10px">
    {!! Form::open(['route' => ['roles.destroy', $role->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan