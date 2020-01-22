@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <nav id="navbar-central" class="navbar navbar-light bg-light">
                            <a class="navbar-store" href="#"></a>
                            <ul class="nav nav-pills">
                              <li class="nav-item">
                                @can('plants.create')
                                <a href="{{ route('plants.create',  $store->id) }}" 
                                class="btn btn-sm btn-primary pull-right">
                                    Crear
                                </a>
                                @endcan
                              </li>
                              <li class="nav-item">
                                    @can('plants.index')
                                    <a href="{{ route('plants.index',  $store->id) }}" 
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
                    <p><strong>Local</strong>     {{ $store->name }}</p>
                    <p><strong>Direccion</strong>       {{ $store->address }}</p>
                    <br>
                 
                </div>

                <div class="panel-body">                                        
                    <p><strong>Registro y monitoreo limpieza y sanitización </strong>    
                    <br>
                    <p><strong>Fecha </strong>     {{ 
                                    date('d-m-Y', strtotime($plant->created_at))
                                }} </p>
                                <p><strong>Equipo 1:</strong>     {{ $plant->equip1 }}</p> 
                                <p><strong>Equipo 2:</strong>     {{ $plant->equip2 }}</p> 
                                <p><strong>Equipo 3:</strong>     {{ $plant->equip3 }}</p> 
                                <p><strong>Pisos:</strong>     {{ $plant->floor }}</p> 
                                <p><strong>Paredes:</strong>     {{ $plant->wall }}</p> 
                                <p><strong>Basurero:</strong>     {{ $plant->dump }}</p> 
                                <p><strong>Accion correctiva:</strong>     {{ $plant->action }}</p> 
                                <p><strong>Observación:</strong>     {{ $plant->observation }}</p>
                                <p><strong>Foto:</strong>  </p>   <img src="/images/{{ $plant->photo}}" alt="..." width="500" height="" class="img-rounded">
                </div>
               
                       
@endsection