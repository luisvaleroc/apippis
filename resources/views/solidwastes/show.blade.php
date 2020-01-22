@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <nav id="navbar-central" class="navbar navbar-light bg-light">
                            <a class="navbar-store" href="#">Empresas</a>
                            <ul class="nav nav-pills">
                              <li class="nav-item">
                                @can('stores.create')
                                <a href="{{ route('stores.create') }}" 
                                class="btn btn-sm btn-primary pull-right">
                                    Crear
                                </a>
                                @endcan
                              </li>
                              <li class="nav-item">
                                    @can('stores.create')
                                    <a href="{{ route('stores.index') }}" 
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
                    <p><strong>Registro y monitoreo limpieza y sanitización </strong>    
                    <br>
                    <p><strong>Fecha </strong>     {{ 
                                    date('d-m-Y', strtotime($solidwaste->created_at))
                                }} </p>
                                <p><strong>Papel (Kg):</strong>    {{ $solidwaste->paper }}</p> 
                                <p><strong>Carton (Kg):</strong>    {{ $solidwaste->paperboard }}</p> 
                                <p><strong>Plastico (Kg):</strong>    {{ $solidwaste->plastic }}</p> 
                                <p><strong>PVC (Kg):</strong>     {{ $solidwaste->pvc }}</p> 
                                <p><strong>Chatarra (Kg):</strong>     {{ $solidwaste->scrap }}</p> 
                                <p><strong>Vidrio (Kg):</strong>     {{ $solidwaste->glass }}</p> 
                                <p><strong>Comida y fruta (Kg):</strong>     {{ $solidwaste->food }}</p> 
                                <p><strong>Ordinarios:</strong>     {{ $solidwaste->ordinary }}</p>
                                <p><strong>Total (Kg):</strong>      {{ $solidwaste->paper + $solidwaste->paperboard + $solidwaste->plastic + $solidwaste->pvc + $solidwaste->scrap + $solidwaste->glass + $solidwaste->food + $solidwaste->ordinary   }}</p>
                                <p><strong>Observación:</strong>     {{ $solidwaste->observation }}</p>
                            
                                <p><strong>Foto:</strong>  </p>   <img src="/images/{{ $solidwaste->photo}}" alt="..." width="500" height="" class="img-rounded">
                </div>
@endsection
