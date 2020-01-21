<div class="row">
@can('plants.show')
    <a href="{{ route('plants.show', $plant->id) }}" 
    class="btn btn-sm btn-default">
    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  
    </a>
@endcan
@can('plants.edit')
    <a href="plants/{{ $plant->id}}/edit" 
    class="btn btn-sm btn-default">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>    </a>
@endcan
@can('plants.destroy')
    {!! Form::open(['route' => ['plants.destroy', $plant->id], 
    'method' => 'DELETE']) !!}
    <button type="submit" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
        </button>
    {!! Form::close() !!}
    </div>
@endcan


