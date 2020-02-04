@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <nav id="navbar-central" class="navbar navbar-light bg-light">
                                <a class="navbar-store" href="#">Sala</a>
                                <ul class="nav nav-pills">
                                  <li class="nav-item">
                                    @can('rooms.create')
                                    <a href="{{ route('rooms.create', $store->id)}}" 
                                    class="btn btn-sm btn-primary pull-right">
                                        Crear
                                    </a>
                                    @endcan
                                  </li>
                                  <li class="nav-item">
                                        @can('rooms.create')
                                        <a href="{{ route('rooms.index', $store->id)}}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Ver
                                        </a>
                                        @endcan
                                      </li>
                                      <li class="nav-item">
                                    @can('stores.show')
                                    <a href="{{ route('stores.show',  $store->id) }}" 
                                    class="btn btn-sm btn-success pull-right">
                                        Todas las planillas
                                    </a>
                                    @endcan
                                  </li>
                                  
                                </ul>
                        </nav>
                               
                </div>
              
                 
                 
                <div class="panel-body">                    
                    {!! Form::model($room, ['route' => ['rooms.update', $room->id],
                    'method' => 'PUT']) !!}

                        @include('rooms.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection