@can('stores.show')
    <a href="{{ route('stores.show', $store->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
@endcan
@can('stores.edit')
    <a href="{{ route('stores.edit', $store->id) }}" 
    class="btn btn-sm btn-default">
        editar
    </a>
@endcan
@can('stores.destroy')
    {!! Form::open(['route' => ['stores.destroy', $store->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
@endcan