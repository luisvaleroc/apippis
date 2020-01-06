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
                      
                    </ul>
                    
                    {{ Form::open(['route' => array('plants.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'plant' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}

                        
                  </nav>

        
                  
                <div class="panel-body">
                    <table id="plants" class="table table-striped table-hover">
                        <thead class="">
                            <tr>
                                <th width="10px">ID</th>
                                <th> Equipo 1</th>
                                <th>Equipo 2</th>
                                <th>Equipo 3</th>
                                <th>Pisos</th>
                                <th>Paredes</th>
                                <th>Basurero</th>
                                <th>Acción correctiva</th>
                                <th>Creado</th>
                              

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($plants as $plant)
                            <tr>
                                <td>{{ $plant->id }}</td>
                                <td>{{ $plant->equip1 }}</td>
                                <td>{{ $plant->equip2 }}</td>
                                <td>{{ $plant->equip3 }}</td>
                                <td>{{ $plant->floor }}</td>
                                <td>{{ $plant->wall }}</td>
                                <td>{{ $plant->dump }}</td>
                                <td>{{ $plant->action }}</td>
                               
                                <td idth="30px">{{ 
                                    date('d-m-Y', strtotime($plant->created_at))
                                
                                }}</td>
                             
                            
                                
                                @include('plants.partials.canlist')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $plants->render() }} 
                </div>
            </div>
        </div>
    </div>
</div>


@endsection