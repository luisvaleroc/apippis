@can('stores.show')
<td width="10px">
    <a href="{{ route('stores.show', $store->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('stores.edit')
<td width="10px">
    <a href="{{ route('stores.edit', $store->id) }}" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>
@endcan
@can('stores.destroy')
<td width="10px">
    {!! Form::open(['route' => ['stores.destroy', $store->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan