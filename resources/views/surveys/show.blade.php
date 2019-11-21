@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <nav id="navbar-central" class="navbar navbar-light bg-light">
                            <a class="navbar-brand" href="#">surveys</a>
                            <ul class="nav nav-pills">
                              <li class="nav-item">
                                @can('surveys.create')
                                <a href="{{ route('surveys.create') }}" 
                                class="btn btn-sm btn-primary pull-right">
                                    Crear
                                </a>
                                @endcan
                              </li>
                              <li class="nav-item">
                                    @can('surveys.create')
                                    <a href="{{ route('surveys.index') }}" 
                                    class="btn btn-sm btn-success pull-right">
                                        Ver
                                    </a>
                                    @endcan
                                  </li>
                              
                            </ul>
                    </nav>

                </div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $survey->name }}</p>
                    <p><strong>Estado</strong>       {{ $survey->status }}</p>
                    
                </div>
            </div>
        </div>
    </div>
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
                @foreach($survey->answer as $answer)
                <tr>
                    <td>{{ $answer->id }}</td>
                    <td>{{ $answer->name }}</td>
                    <td>{{ $answer->status }}</td>
                    @can('surveys.show')
<td width="10px">
<a href="{{ route('surveys.show', $answer->id) }}" 
class="btn btn-sm btn-default">
ver
</a>
</td>
@endcan
@can('surveys.edit')
<td width="10px">
<a href="{{ route('answer.edit', $answer->id) }}" 
class="btn btn-sm btn-default">
editar
</a>
</td>
@endcan
@can('surveys.destroy')
<td width="10px">
{!! Form::open(['route' => ['answer.destroy', $answer->id], 
'method' => 'DELETE']) !!}
<button class="btn btn-sm btn-danger" Onclick="return confirm('¿Estas seguro de eliminar este registro?');" >
Eliminar
</button>
{!! Form::close() !!}
</td>
@endcan
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>

</div>
@endsection