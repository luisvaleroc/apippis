@can('roles.show')
    <a href="{{ route('roles.show', $role->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
@endcan
@can('roles.edit')
    <a href="{{ route('roles.edit', $role->id) }}" 
    class="btn btn-sm btn-default">
        editar
    </a>
@endcan
@can('roles.destroy')
    {!! Form::open(['route' => ['roles.destroy', $role->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
@endcan