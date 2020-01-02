@can('employees.show')
<td width="10px">
    <a href="{{ route('employees.show', $employee->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('employees.edit')
<td width="10px">
    <a href="employees/{{ $employee->id}}/edit" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>  
@endcan
@can('employees.destroy')
<td width="10px">
    {!! Form::open(['route' => ['employees.destroy', $employee->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('¿Seguro desea eliminar este registro?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan
