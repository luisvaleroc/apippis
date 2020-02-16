@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-sector" href="#">Empresas</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('sectors.create')
                        <a href="{{ route('sectors.create') }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      
                    </ul>
                    
         

                        
                  </nav>

        
                  
          
            </div>
        </div>
    </div>
</div>

<div class="panel-body">
<table id="sectors" class="display nowrap" style="width:100%">

                        <thead class="">
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th >Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sectors as $sector)
                            <tr>
                                <td>{{ $sector->id }}</td>
                                <td>{{ $sector->name }}</td>
                               <td> @include('sectors.partials.canlist')</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
            <tr>
            <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th >Acciones</th>
            </tr>
                    </table>
                </div>
<script>
 $(document).ready(function() {
    var table = $('#sectors').DataTable( {
        

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

     
