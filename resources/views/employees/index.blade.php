@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-employee" href="#">Empleados</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('employees.create')
                        <a href="{{ route('employees.create', $store->id) }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      
                    </ul>
<!--                     
                    {{ Form::open(['route' => array('employees.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'employee' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }} -->

                        
                  </nav>

        
                  
                <div class="panel-body">
                <table id="employees" class="display nowrap" style="width:100%">
                        <thead class="">
                            <tr>
                               
                                <th> Nombre</th>
                                <th>Rut</th>
                              
                              
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                               
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->rut }}</td>
                            
                                <!-- <td idth="30px">{{ $employee->created_at->format('d-m-Y') }}</td> -->
                              <td>  @include('employees.partials.canlist')</td>
                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
            <tr>
            <th> Nombre</th>
                                <th>Rut</th>
                              
                              
                                <th>Acciones</th>
            </tr>
            <tfoot>

                    </table>
              
                </div>
            </div>
        </div>
    </div>
</div>


<script>
 $(document).ready(function() {
    var table = $('#employees').DataTable( {
        

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