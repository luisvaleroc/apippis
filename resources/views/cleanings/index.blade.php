@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-cleaning" href="#">Salud e higiene personal</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('cleanings.create')
                        <a href="{{ route('cleanings.create', $store->id) }}" 
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
                    
                    <!-- {{ Form::open(['route' => array('cleanings.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'cleaning' => 'search']) }}
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
                <table id="cleanings" class="display nowrap" style="width:100%">
                        <thead class="">
                            <tr>
                                <th >Creado</th>
                                <th> Nombre</th>
                                <th>Rut</th>
                                <th>Nariz</th>
                                <th>Heridas</th>
                                <th>Maquillaje</th>
                                <th>Joyas</th>
                                <th>Orejas</th>
                                <th>Zapatos</th>
                                <th>Pelo</th>
                                <th>Uñas</th>
                                <th>Uniforme</th>      
                                <th>Observacón</th>                          

                                <th>Acciones</th>
                                <th>Descargar</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cleanings as $cleaning)
                            <tr>
                            <td idth="30px">{{ $cleaning->created_at->format('d-m-Y') }}</td>
                                <td>{{ $cleaning->employee->name }}</td>
                                <td>{{ $cleaning->employee->rut }}</td>
                                <td>{{ $cleaning->mask }}</td>
                                <td>{{ $cleaning->wound }}</td>
                                <td>{{ $cleaning->makeup }}</td>
                                <td>{{ $cleaning->jewelry }}</td>
                                <td>{{ $cleaning->ear }}</td>
                                <td>{{ $cleaning->shoe }}</td>
                                <td>{{ $cleaning->hair }}</td>
                                <td>{{ $cleaning->nail }}</td>
                                <td>{{ $cleaning->uniform }}</td>
                               
                                <td>{{ $cleaning->observation }}</td>
                                
                            
                             <td>   @include('cleanings.partials.canlist')</td>
                             <td>
                             <div class="row">
                                
                             <a href="{{ route('cleanings.pdf', [$store->id, $cleaning->id]) }}" 
    class="btn btn-sm btn-default" title="Descargar registros de este mes en formato pdf">
    <span class="icofont-file-excel  btn btn-sm btn-success"></span>  
    </a>


                        <a href="{{ route('cleanings.excel', [$store->id, $cleaning->id]) }}" 
    class="btn btn-sm btn-default" title="Descargar registros de este mes en formato excel">
    <span class="icofont-file-excel  btn btn-sm btn-success"></span>  
    </a>
                        </div>
                             </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
            <tr>
            <th >Creado</th>
                                <th> Nombre</th>
                                <th>Rut</th>
                                <th>Nariz</th>
                                <th>Heridas</th>
                                <th>Maquillaje</th>
                                <th>Joyas</th>
                                <th>Orejas</th>
                                <th>Zapatos</th>
                                <th>Pelo</th>
                                <th>Uñas</th>
                                <th>Uniforme</th>      
                                <th>Observacón</th>                          

                                <th>Acciones</th>
                                <th>Descargar</th> 
            </tr>
        </tfoot>
                    </table>
                </div>

<script>
 $(document).ready(function() {
    var table = $('#cleanings').DataTable( {
        

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