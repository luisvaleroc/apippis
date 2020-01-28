<div class="row">
<!-- @can('employees.show')
    <a href="{{ route('employees.show', $employee->id) }}" 
    class="btn btn-sm btn-default" title="ver empleados">
    <span class="icofont-eye-alt btn btn-sm btn-default"></span> 
    </a>
@endcan -->
@can('employees.edit')
    <a href="employees/{{ $employee->id}}/edit" 
    class="btn btn-sm btn-default" title="Editar empleado">
    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>   

    </a>
@endcan
@can('employees.destroy')
    {!! Form::open(['route' => ['employees.destroy', $employee->id], 
    'method' => 'DELETE']) !!}
        <button title="Eliminar permanentemente" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            
        </button>
    {!! Form::close() !!}
@endcan
</div>