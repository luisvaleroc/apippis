@can('employees.show')
    <a href="{{ route('employees.show', $employee->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
@endcan
@can('employees.edit')
    <a href="employees/{{ $employee->id}}/edit" 
    class="btn btn-sm btn-default">
        editar
    </a>
@endcan
@can('employees.destroy')
    {!! Form::open(['route' => ['employees.destroy', $employee->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
@endcan
