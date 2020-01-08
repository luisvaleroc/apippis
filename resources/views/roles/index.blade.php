@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">Roles</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('roles.create')
                        <a href="{{ route('roles.create') }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      
                    </ul>
                    
                    {{ Form::open(['route' => 'roles.index', 'method' => 'GET', 'class' => 'form-inline', 'user' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Nombre del rol','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}

                        
                  </nav>

        
                  
                <div class="panel-body">
                    <table id="roles" class="table table-striped table-hover">
                        <thead class="">
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                @include('roles.partials.canlist')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 

<script>
        $(document).ready(function() {
       $('#roles').DataTable();
   } );  
       </script> -->
@endsection