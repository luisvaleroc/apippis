<div class="row">
<td width="10px">
@can('solidwastes.show')

    <a href="{{ route('solidwastes.show', $solidwaste->id) }}" 
    class="btn btn-sm btn-default"title="Ver" >
    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  
    </a>
@endcan
@can('solidwastes.edit')
    <a href="solidwastes/{{ $solidwaste->id}}/edit" 
    class="button" title="Editar" >
        
        <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>   
    </a>
@endcan
@can('solidwastes.destroy')
    {!! Form::open(['route' => ['solidwastes.destroy', $solidwaste->id], 
    'method' => 'DELETE']) !!}
        <button type="submit" title="Eliminar permanentemente" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            
        </button>
    {!! Form::close() !!}

@endcan
</td>
</div>