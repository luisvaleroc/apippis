@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-solidwaste" href="#">Locales</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('solidwastes.create')
                        <a href="{{ route('solidwastes.create', $store->id) }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      
                    </ul>
                    
                    {{ Form::open(['route' => array('solidwastes.index', $store->id), 'method' => 'GET', 'class' => 'form-inline', 'solidwaste' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}

                        
                  </nav>

        
                  
                <div class="panel-body">
                    <table id="solidwastes" class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10px">ID</th>
                                <th>Papel</th>
                                <th>Carton</th>
                                <th>Plastico</th>
                                <th>PVC</th>
                                <th>Chatarra</th>
                                <th>Vidrio</th>
                                <th>Comida y fruta</th>
                                <th>Ordinarios</th>
                                <th>Creado</th>

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solidwastes as $solidwaste)
                            <tr>
                                <td>{{ $solidwaste->id }}</td>
                                <td>{{ $solidwaste->paper }}</td>
                                <td>{{ $solidwaste->paperboard }}</td>
                                <td>{{ $solidwaste->plastic }}</td>
                                <td>{{ $solidwaste->pvc }}</td>
                                <td>{{ $solidwaste->scrap }}</td>
                                <td>{{ $solidwaste->glass }}</td>
                                <td>{{ $solidwaste->food }}</td>
                                <td>{{ $solidwaste->ordinary }}</td>
                                <td>{{ $solidwaste->created_at }}</td>
                                @include('solidwastes.partials.canlist')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $solidwastes->render() }} 
                </div>
            </div>
        </div>
    </div>
</div>


@endsection