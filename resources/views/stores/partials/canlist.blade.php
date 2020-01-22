
<div class="row">
@can('stores.show')
    <a href="{{ route('stores.show', $store->id) }}" 
    class="btn btn-sm btn-default" title="Ver planillas">
    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  
    </a>
@endcan
@can('stores.edit')
    <a href="{{ route('stores.edit', $store->id) }}" 
    class="btn btn-sm btn-default" title="Editar Local">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>   
    </a>
@endcan
@can('stores.destroy')
    {!! Form::open(['route' => ['stores.destroy', $store->id], 
    'method' => 'DELETE']) !!}
        <button title="Eliminar Local"   class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar permanentemente?');" >
            
        </button>
    {!! Form::close() !!}
@endcan
</div>

