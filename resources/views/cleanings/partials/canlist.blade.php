@can('cleanings.show')
    <a href="{{ route('cleanings.show', $cleaning->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
@endcan
@can('cleanings.edit')
    <a href="cleanings/{{ $cleaning->id}}/edit" 
    class="btn btn-sm btn-default">
        editar
    </a>
@endcan
@can('cleanings.destroy')
    {!! Form::open(['route' => ['cleanings.destroy', $cleaning->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
@endcan
