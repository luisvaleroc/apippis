@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                                <a class="navbar-store" href="#">Salas</a>
                                <ul class="nav nav-pills">
                               
                                  <li class="nav-item">
                                        @can('stores.index')
                                        <a href="{{ route('rooms.index', $store->id) }}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Ver
                                        </a>
                                        @endcan
                                      </li>
                                  
                                </ul>
                        </nav>

                </div>


                
                <div class="panel-body">                    
                    {{ Form::open(['route' => ['rooms.store', $store->id]]) }}

                        @include('rooms.partials.form')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection