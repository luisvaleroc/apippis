@can('brands.show')
<td width="10px">
    <a href="{{ route('brands.show', $brand->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('brands.edit')
<td width="10px">
    <a href="{{ route('brands.edit', $brand->id) }}" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>
@endcan
@can('brands.destroy')
<td width="10px">
    {!! Form::open(['route' => ['brands.destroy', $brand->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan