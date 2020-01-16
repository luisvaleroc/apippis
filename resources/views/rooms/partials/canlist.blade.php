@can('rooms.show')
    <a href="{{ route('rooms.show', $room->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
@endcan
@can('rooms.edit')
    <a href="rooms/{{ $room->id}}/edit" 
    class="btn btn-sm btn-default">
        editar
    </a>
@endcan
@can('rooms.destroy')
    {!! Form::open(['route' => ['rooms.destroy', $room->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
@endcan
