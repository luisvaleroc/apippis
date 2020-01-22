<div class="row">
@can('plants.show')
    <a href="{{ route('plants.show', [$store->id, $plant->id]) }}" 
    class="btn btn-sm btn-default" title="ver registro">
    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  
    </a>
@endcan
@can('plants.edit')
    <a href="plants/{{ $plant->id}}/edit" 
    class="btn btn-sm btn-default" title="Editar registro">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>    </a>
@endcan
@can('plants.destroy')
    {!! Form::open(['route' => ['plants.destroy', $plant->id], 
    'method' => 'DELETE']) !!}
    <button type="submit" title="Eliminar registro" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
        </button>
    {!! Form::close() !!}
  
@endcan


</div>