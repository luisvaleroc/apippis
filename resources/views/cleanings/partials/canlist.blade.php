<div class="row">

@can('cleanings.show')
    <a href="{{ route('cleanings.show', [$store->id, $cleaning->id]) }}" 
    class="btn btn-sm btn-default" title="Ver registro">
    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  

    </a>
@endcan
@can('cleanings.edit')
    <a href="cleanings/{{ $cleaning->id}}/edit" 
    class="btn btn-sm btn-default" title="Editar registro">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>    </a>
    </a>
@endcan
@can('cleanings.destroy')
    {!! Form::open(['route' => ['cleanings.destroy', $cleaning->id], 
    'method' => 'DELETE']) !!}
    <button type="submit" title="Eliminar registro" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            
        </button>
    {!! Form::close() !!}
@endcan
</div>