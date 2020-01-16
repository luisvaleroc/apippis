@can('plants.show')
    <a href="{{ route('plants.show', $plant->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
@endcan
@can('plants.edit')
    <a href="plants/{{ $plant->id}}/edit" 
    class="btn btn-sm btn-default">
        editar
    </a>
@endcan
@can('plants.destroy')
    {!! Form::open(['route' => ['plants.destroy', $plant->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
@endcan
