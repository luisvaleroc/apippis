@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
               
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">Encuestas</a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        @can('roles.create')
                        <a href="{{ route('surveys.create') }}" 
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                        @endcan
                      </li>
                      
                    </ul>
                    
                    {{ Form::open(['route' => 'surveys.index', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) }}
                    <div class="form-group mx-sm-3 mb-2">
                            {{ Form::text('name', null, ['placeholder' => 'Buscar encuesta','class' => 'form-control', 'id' => 'name']) }}

                    </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button> 
                            
                        {{ Form::close() }}
                        
                  </nav>
                  
                <div class="panel-body">
                    <table id="roles" class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Surveys as $survey)
                            <tr>
                                <td>{{ $survey->id }}</td>
                                <td>{{ $survey->name }}</td>
                                <td>{{ $survey->status }}</td>
                                @can('surveys.show')
<td width="10px">
    <a href="{{ route('surveys.show', $survey->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>
@endcan
@can('surveys.edit')
<td width="10px">
    <a href="{{ route('surveys.edit', $survey->id) }}" 
    class="btn btn-sm btn-default">
        editar
    </a>
</td>
@endcan
@can('surveys.destroy')
<td width="10px">
    {!! Form::open(['route' => ['surveys.destroy', $survey->id], 
    'method' => 'DELETE']) !!}
        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
            Eliminar
        </button>
    {!! Form::close() !!}
</td>
@endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $Surveys->render() }}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection