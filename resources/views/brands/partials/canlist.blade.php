<div class="row">

@can('brands.show')
    <a href="{{ route('brands.show', $brand->id) }}" 
    class="btn btn-sm btn-default" title="Ver Empresas">
    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  

    </a>
@endcan
@can('brands.edit')
    <a href="{{ route('brands.edit', $brand->id) }}" 
    class="btn btn-sm btn-default">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>   
    </a>
@endcan
@can('brands.destroy')
    {!! Form::open(['route' => ['brands.destroy', $brand->id], 
    'method' => 'DELETE']) !!}
        <button title="Eliminar permanentemente" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este empresa permanentemente?');" >
            
        </button>
    {!! Form::close() !!}
@endcan

</div>