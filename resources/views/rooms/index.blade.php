@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-room" href="#">Salas</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('rooms.create')
                        <a href="{{ route('rooms.create', $store->id) }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      
                    </ul>
                    
                    {{ Form::open(['route' => array('rooms.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'room' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}

                        
                  </nav>

        
                  
                <div class="panel-body">
                    <table id="rooms" class="table table-striped table-hover">
                        <thead class="">
                            <tr>
                                <th width="10px">ID</th>
                                <th> Nombre</th>
                                <th>Descripción</th>
                                <th>Creado</th>
                                

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td>{{ $room->name }}</td>
                                <td>{{ $room->description }}</td>
                               
                                
                            
                                <td idth="30px">{{ $room->created_at->format('d-m-Y') }}</td>
                                @include('rooms.partials.canlist')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $rooms->render() }} 
                </div>
            </div>
        </div>
    </div>
</div>


@endsection