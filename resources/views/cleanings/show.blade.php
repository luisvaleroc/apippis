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
                                @can('stores.create')
                                <a href="{{ route('cleanings.create', $store->id ) }}" 
                                class="btn btn-sm btn-primary pull-right">
                                    Crear
                                </a>
                                @endcan
                              </li>
                              <li class="nav-item">
                                    @can('stores.create')
                                    <a href="{{ route('cleanings.index', $store->id) }}" 
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
                </div>
               
                <div class="panel-body">                                        
                    <p><strong>Registro y monitoreo Salud e higiene personal. </strong>    
                    <br>
                    <p><strong>Fecha </strong>     {{ 
                                    date('d-m-Y', strtotime($cleaning->created_at))
                                }} </p>
                                <p><strong>Nombre:</strong>     {{ $cleaning->employee->name}}</p> 
                                <p><strong>Rut:</strong>     {{ $cleaning->employee->rut}}</p> 
                                <p><strong>Nariz:</strong>    {{ $cleaning->mask }}</p> 
                                <p><strong>Heridas:</strong>   {{ $cleaning->wound }}</p> 
                                <p><strong>Maquillaje:</strong>     {{ $cleaning->makeup }}</p> 
                                <p><strong>Joyas:</strong>     {{ $cleaning->jewelry }}</p> 
                                <p><strong>Orejas:</strong>    {{ $cleaning->ear }}</p> 
                                <p><strong>Zapatos:</strong>     {{ $cleaning->shoe }}</p> 
                                <p><strong>Pelo:</strong>     {{ $cleaning->hair }}</p>
                                <p><strong>Uñas:</strong>    {{ $cleaning->nail }}</p>
                                <p><strong>Uniforme:</strong>    {{ $cleaning->uniform }}</p>
                                <p><strong>Observación:</strong>   {{ $cleaning->observation }}</p>
                                <p><strong>Foto:</strong>  </p>   <img src="/images/{{ $cleaning->photo}}" alt="..." width="500" height="" class="img-rounded">
                </div>
@endsection

