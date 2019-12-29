@can('solidwastes.show')
<td width="10px">
    <a href="{{ route('solidwastes.show', $solidwaste->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('solidwastes.edit')
<td width="10px">
    <a href="{{ route('solidwastes.edit', [$store->id, $solidwaste->îd]) }}" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>  
@endcan
@can('solidwastes.destroy')
<td width="10px">
    {!! Form::open(['route' => ['solidwastes.destroy', $solidwaste->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan