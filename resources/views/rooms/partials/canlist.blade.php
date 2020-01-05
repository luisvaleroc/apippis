@can('rooms.show')
<td width="10px">
    <a href="{{ route('rooms.show', $room->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('rooms.edit')
<td width="10px">
    <a href="rooms/{{ $room->id}}/edit" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>  
@endcan
@can('rooms.destroy')
<td width="10px">
    {!! Form::open(['route' => ['rooms.destroy', $room->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan
