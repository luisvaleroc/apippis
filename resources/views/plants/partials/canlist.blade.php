@can('plants.show')
<td width="10px">
    <a href="{{ route('plants.show', $plant->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('plants.edit')
<td width="10px">
    <a href="plants/{{ $plant->id}}/edit" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>  
@endcan
@can('plants.destroy')
<td width="10px">
    {!! Form::open(['route' => ['plants.destroy', $plant->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan
