@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios
                    <!-- <nav id="navbar-central" class="navbar navbar-light bg-light pull-right ">
                        {{ Form::open(['route' => 'users.index', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) }}
                            <div class="form-group mx-sm-3 mb-2">
                                {{ Form::text('name', null, ['placeholder' => 'Nombre del rol','class' => 'form-control', 'id' => 'name']) }}
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Buscar</button>    
                         {{ Form::close() }}
                    </nav> -->
                   
                </div>

                
                <table id="users" class="display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="10px">ID</th>
                                                <th>Nombre</th>
                                                <th >Acciones</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                               <td>
                                               <div class="row">
                                                @can('users.show')
                                            
                                                    <a href="{{ route('users.show', $user->id) }}" 
                                                    class="btn btn-sm btn-default" title="ver usuarios">
                                                    <span class="icofont-eye-alt btn btn-sm btn-default"></span>  

                                                    </a>
                                          
                                                @endcan
                                                @can('users.edit')
                                              
                                                    <a href="{{ route('users.edit', $user->id) }}" 
                                                    class="btn btn-sm btn-default" title="Editar usuario">
                                                    <span class="icofont-pencil-alt-5 btn btn-sm btn-default"></span>   

                                                    </a> 
                                             
                                                @endcan
                                                @can('users.destroy')
                                               
                                                    {!! Form::open(['route' => ['users.destroy', $user->id], 
                                                    'method' => 'DELETE']) !!}
                                                        <button title="Eliminar permanentemente" class="icofont-ui-delete btn btn-sm btn-danger " Onclick="return confirm('¿Seguro desea eliminar este usuario permanentemente?');" >
                                                           
                                                        </button>
                                                    {!! Form::close() !!}
                                               
                                                @endcan
                                                </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                            <tr>
                           
                            <th width="10px">ID</th>
                                                <th>Nombre</th>
                                                <th >Acciones</th>
                
                            </tr>
                        </tfoot>
                                    </table>
                                    </div>
    
           
            </div>
        </div>
    </div>
</div>
<

<script>
 $(document).ready(function() {
    var table = $('#users').DataTable( {
        

        rowReorder: {
            selector: 'td:nth-child(2)'

        },
        responsive: true,

                    "language": {
                        "info": "_TOTAL_ registros",
                        "search": "Buscar",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        },
                        "lengthMenu": 'Mostrar <select >'+
                                    '<option value="10">10</option>'+
                                    '<option value="30">30</option>'+
                                    '<option value="-1">Todos</option>'+
                                    '</select> registros',
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "emptyTable": "No hay datos",
                        "zeroRecords": "No hay coincidencias", 
                        "infoEmpty": "",
                        "infoFiltered": ""
                    }





    } );
} );
       </script> 


@endsection