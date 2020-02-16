<div class="row">

@can('sectors.edit')
    <a href="{{ route('sectors.edit', $sector->id) }}" 
    class="btn btn-sm btn-default">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>   
    </a>
@endcan
@can('sectors.destroy')
    {!! Form::open(['route' => ['sectors.destroy', $sector->id], 
    'method' => 'DELETE']) !!}
        <button title="Eliminar permanentemente" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este empresa permanentemente?');" >
            
        </button>
    {!! Form::close() !!}
@endcan

</div>