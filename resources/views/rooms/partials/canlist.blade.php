<div class="row">
<!-- @can('rooms.show')
    <a href="{{ route('rooms.show', $room->id) }}" 
    class="btn btn-sm btn-default" title="Ver sala">
    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  
    </a>
@endcan -->
@can('rooms.edit')
    <a href="rooms/{{ $room->id}}/edit" 
    class="btn btn-sm btn-default" title="Editar sala">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>   

    </a>
@endcan
@can('rooms.destroy')
    {!! Form::open(['route' => ['rooms.destroy', $room->id], 
    'method' => 'DELETE']) !!}
        <button title="Eliminar permanentemente" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            
        </button>
    {!! Form::close() !!}
@endcan
</div>