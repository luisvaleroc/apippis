@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-employee" href="#">Locales</a>
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
                    
                    {{ Form::open(['route' => array('employees.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'employee' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}

                        
                  </nav>

        
                  
                <div class="panel-body">
                    <table id="employees" class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10px">ID</th>
                                <th> Nombre</th>
                                <th>Rut</th>
                              
                                <th>Creado</th>

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->rut }}</td>
                            
                                <td idth="30px">{{ $employee->created_at->format('d-m-Y') }}</td>
                                @include('employees.partials.canlist')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $employees->render() }} 
                </div>
            </div>
        </div>
    </div>
</div>


@endsection