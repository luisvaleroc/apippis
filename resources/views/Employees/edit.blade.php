@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <nav id="navbar-central" class="navbar navbar-light bg-light">
                                <a class="navbar-employee" href="#">Empleados</a>
                                <ul class="nav nav-pills">
                                  <li class="nav-item">
                                    @can('employees.create')
                                    <a href="{{ route('employees.create', $employee->id)}}" 
                                    class="btn btn-sm btn-primary pull-right">
                                        Crear
                                    </a>
                                    @endcan
                                  </li>
                                  <li class="nav-item">
                                        @can('employees.create')
                                        <a href="{{ route('employees.index', $employee->id)}}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Ver
                                        </a>
                                        @endcan
                                      </li>
                                  
                                </ul>
                        </nav>
                               
                </div>
              
                 
                 
                <div class="panel-body">                    
                    {!! Form::model($employee, ['route' => ['employees.update', $employee->id],
                    'method' => 'PUT']) !!}

                        @include('employees.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection