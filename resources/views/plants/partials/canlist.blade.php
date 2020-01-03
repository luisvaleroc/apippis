@can('cleanings.show')
<td width="10px">
    <a href="{{ route('cleanings.show', $cleaning->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('cleanings.edit')
<td width="10px">
    <a href="cleanings/{{ $cleaning->id}}/edit" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>  
@endcan
@can('cleanings.destroy')
<td width="10px">
    {!! Form::open(['route' => ['cleanings.destroy', $cleaning->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan
