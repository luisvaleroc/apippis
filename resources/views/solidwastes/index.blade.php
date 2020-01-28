@extends('layouts.app')

@section('content')
 
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-solidwaste" href="#">Desechos solidos</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('solidwastes.create')
                        <a href="{{ route('solidwastes.create', $store->id) }}" 
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
<!--                     
                    {{ Form::open(['route' => array('solidwastes.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'solidwaste' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }} -->


     <!-- {{ Form::open(['route' => array('solidwastes.pdf', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'cleaning' => 'Fecha']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::month('name', null, ['placeholder' => 'Iprimir Fecha','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Imprimir Fecha</button> 
                            
                        {{ Form::close() }} -->

                        
                  </nav>


<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
            <th>Creado</th>
            <th>Papel (Kg)</th>
                                <th>Carton (Kg)</th>
                                <th>Plastico (Kg)</th>
                                <th>PVC (Kg)</th>
                                <th>Chatarra (Kg)</th>
                                <th>Vidrio (Kg)</th>
                                <th>Comida y fruta (Kg)</th>
                                <th>Ordinarios (Kg)</th>
                                <th>Total (Kg)</th>
                                <th>Observación</th>
                                <th>Acciones (Kg)</th>
                                <th>Descargar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($solidwastes as $solidwaste)
                            <tr>
                            <td >{{ $solidwaste->created_at->format('d-m-Y') }}</td>
                                <td>{{ $solidwaste->paper }}</td>
                                <td>{{ $solidwaste->paperboard }}</td>
                                <td>{{ $solidwaste->plastic }}</td>
                                <td>{{ $solidwaste->pvc }}</td>
                                <td>{{ $solidwaste->scrap }}</td>
                                <td>{{ $solidwaste->glass }}</td>
                                <td>{{ $solidwaste->food }}</td>
                                <td>{{ $solidwaste->ordinary }}</td>
                                <td>{{ $solidwaste->paper + $solidwaste->paperboard + $solidwaste->plastic + $solidwaste->pvc + $solidwaste->scrap + $solidwaste->glass + $solidwaste->food + $solidwaste->ordinary   }}</td>
                                <td>{{ $solidwaste->observation }}</td>
                                @include('solidwastes.partials.canlist')
                                <td>
                                <div class="row">
                                
                                {{ Form::open(['route' => array('solidwastes.pdf', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'solidwaste' => 'Fecha']) }}
                    <input id="name" name="name" type="hidden" value="{{  $solidwaste->created_at->format('Y-m')  }}">

                    <button type="submit" title="Descargar registros de este mes en formato pdf" class="icofont-file-pdf  btn btn-sm btn-success"  style="margin-left: 10px">
        </button>                            
                        {{ Form::close() }}


                        <a href="{{ route('solidwastes.excel', [$store->id, $solidwaste->id]) }}" 
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
            <th>Creado</th>  <th>Papel (Kg)</th>

                            
                                <th>Carton (Kg)</th>
                                <th>PVC (Kg)</th>
                                <th>Chatarra (Kg)</th>
                                <th>Vidrio (Kg)</th>
                                <th>Comida y fruta (Kg)</th>
                                <th>Ordinarios (Kg)</th>
                                <th>Ordinarios</th>
                                <th>Total (Kg)</th>
                                <th>Observación</th>
                                <th>Acciones</th>
                                <th>Descargar</th>

            </tr>
        </tfoot>
    </table>



    <script>
 $(document).ready(function() {
    var table = $('#example').DataTable( {
        

      

        
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




