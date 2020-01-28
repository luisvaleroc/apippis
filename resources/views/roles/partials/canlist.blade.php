<div class="row">
@can('roles.show')
    <a href="{{ route('roles.show', $role->id) }}" 
    class="btn btn-sm btn-default" title="Ver rol">
    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  
    </a>
@endcan
@can('roles.edit')
    <a href="{{ route('roles.edit', $role->id) }}" 
    class="btn btn-sm btn-default" title="Editar rol">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span> 
    </a>
@endcan
@can('roles.destroy')
    {!! Form::open(['route' => ['roles.destroy', $role->id], 
    'method' => 'DELETE']) !!}
        <button ctitle="Eliminar permanentemente" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar permanentemente este rol?');" >
            
        </button>
    {!! Form::close() !!}
@endcan
</div>