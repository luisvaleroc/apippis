@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-cleaning" href="#">Salud e hiene personal</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('cleanings.create')
                        <a href="{{ route('cleanings.create', $store->id) }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      
                    </ul>
                    
                    {{ Form::open(['route' => array('cleanings.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'cleaning' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}

                        
                  </nav>

        
                  
                <div class="panel-body">
                    <table id="cleanings" class="table table-striped table-hover">
                        <thead class="">
                            <tr>
                                <th width="10px">ID</th>
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
                                <th>Creado</th>

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cleanings as $cleaning)
                            <tr>
                                <td>{{ $cleaning->id }}</td>
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
                                
                            
                                <td idth="30px">{{ $cleaning->created_at->format('d-m-Y') }}</td>
                                @include('cleanings.partials.canlist')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $cleanings->render() }} 
                </div>
            </div>
        </div>
    </div>
</div>


@endsection