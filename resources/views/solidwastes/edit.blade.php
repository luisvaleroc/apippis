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
                                    <a href="{{ route('solidwastes.create', $store->id)}}" 
                                    class="btn btn-sm btn-primary pull-right">
                                        Crear
                                    </a>
                                    @endcan
                                  </li>
                                  <li class="nav-item">
                                        @can('stores.create')
                                        <a href="{{ route('solidwastes.index', $store->id)}}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Ver
                                        </a>
                                        @endcan
                                      </li>
                                  
                                </ul>
                        </nav>
                               
                </div>
              
                 
                 
                <div class="panel-body">                    
                    {!! Form::model($solidwaste, ['route' => ['solidwastes.update', $solidwaste->id],
                    'method' => 'PUT']) !!}

                        @include('solidwastes.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection