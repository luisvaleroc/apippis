@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">Empresas</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('brands.create')
                        <a href="{{ route('brands.create') }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      
                    </ul>
                    
                    {{ Form::open(['route' => 'brands.index', 'method' => 'GET', 'class' => 'form-inline', 'user' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Nombre del rol','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}

                        
                  </nav>

        
                  
                <div class="panel-body">
                    <table id="brands" class="table table-striped table-hover">
                        <thead class="">
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Sector</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>{{ $brand->sector }}</td>
                                @include('brands.partials.canlist')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $brands->render() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 

<script>
        $(document).ready(function() {
       $('#brands').DataTable();
   } );  
       </script> -->
@endsection
