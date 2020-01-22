@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-plant" href="#">Limpieza y sanitización</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('plants.create')
                        <a href="{{ route('plants.create', $store->id) }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      <li class="nav-item">
                                    @can('stores.show')
                                    <a href="{{ route('stores.show',  $store->id) }}" 
                                    class="btn btn-sm btn-success pull-right">
                                        Todas las planillas
                                    </a>
                                    @endcan
                                  </li>
                      
                    </ul>
                    
                    <!-- {{ Form::open(['route' => array('plants.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'plant' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }} -->

                        
                  </nav>

        
                
            </div>
        </div>
    </div>
</div>


  
<div class="panel-body">
                <table id="plants" class="display nowrap" style="width:100%">
                        <thead class="">
                            <tr>
                                <th>Creado</th>
                                <th>Equipo 1</th>
                                <th>Equipo 2</th>
                                <th>Equipo 3</th>
                                <th>Pisos</th>
                                <th>Paredes</th>
                                <th>Basurero</th>
                                <th>Acción correctiva</th>
                                <th>Observación</th>
                                <th>Acciones</th>
                              

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($plants as $plant)
                            <tr>
                            <td idth="30px">{{ 
                                    date('d-m-Y', strtotime($plant->created_at))
                                }}</td>
                            
                                <td>{{ $plant->equip1 }}</td>
                                <td>{{ $plant->equip2 }}</td>
                                <td>{{ $plant->equip3 }}</td>
                                <td>{{ $plant->floor }}</td>
                                <td>{{ $plant->wall }}</td>
                                <td>{{ $plant->dump }}</td>
                                <td>{{ $plant->action }}</td>
                                <td>{{ $plant->observation }}</td>
                           
                                <td>   @include('plants.partials.canlist')</td>
                   
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
            <tr>
                                <th>Creado</th>
                                <th>Equipo 1</th>
                                <th>Equipo 2</th>
                                <th>Equipo 3</th>
                                <th>Pisos</th>
                                <th>Paredes</th>
                                <th>Basurero</th>
                                <th>Acción correctiva</th>
                                <th>Observación</th>
                                <th>Acciones</th>
            </tr>
        </tfoot>

                    </table>
                </div>


<script>
 $(document).ready(function() {
    var table = $('#plants').DataTable( {
        

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