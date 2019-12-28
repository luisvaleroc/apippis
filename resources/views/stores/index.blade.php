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
                      
                    </ul>
                    
                    {{ Form::open(['route' => 'stores.index', 'method' => 'GET', 'class' => 'form-inline', 'store' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}

                        
                  </nav>

        
                  
                <div class="panel-body">
                    <table id="stores" class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stores as $store)
                            <tr>
                                <td>{{ $store->id }}</td>
                                <td>{{ $store->name }}</td>
                                <td>{{ $store->address }}</td>
                                @include('stores.partials.canlist')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $stores->render() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 

<script>
        $(document).ready(function() {
       $('#stores').DataTable();
   } );  
       </script> -->
@endsection