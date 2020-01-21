<div class="row">

@can('brands.show')
    <a href="{{ route('brands.show', $brand->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
@endcan
@can('brands.edit')
    <a href="{{ route('brands.edit', $brand->id) }}" 
    class="btn btn-sm btn-default">
        editar
    </a>
@endcan
@can('brands.destroy')
    {!! Form::open(['route' => ['brands.destroy', $brand->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
@endcan

</div>