@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-store" href="#">Locales</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('stores.create')
                        <a href="{{ route('stores.create') }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      <li class="nav-item">
                                    @can('stores.show')
                                    <a href="{{ route('brandusers.index') }}" 
                                    class="btn btn-sm btn-success pull-right">
                                        Usuarios Empresa
                                    </a>
                                    @endcan
                                  </li>
                            </ul>
                    </ul>
<!--                     
                    {{ Form::open(['route' => 'stores.index', 'method' => 'GET', 'class' => 'form-inline', 'store' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }} -->

                        
                  </nav>

        
                  
                <div class="panel-body">
                <table id="stores" class="display nowrap" style="width:100%">
                        <thead class="">
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stores as $store)
                            <tr>
                                <td>{{ $store->id }}</td>
                                <td>{{ $store->name }}</td>
                                <td>{{ $store->address }}</td>
                              <td>@include('stores.partials.canlist') </td>  
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
            <tr>
            <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Acciones</th>

            </tr>
        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
 $(document).ready(function() {
    var table = $('#stores').DataTable( {
        

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