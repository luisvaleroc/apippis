@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <nav id="navbar-central" class="navbar navbar-light bg-light">
                                <a class="navbar-store" href="#">Salud e higiene personal</a>
                                <ul class="nav nav-pills">
                               
                                  <li class="nav-item">
                                        @can('stores.index')
                                        <a href="{{ route('cleanings.index', $store->id) }}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Ver
                                        </a>
                                        @endcan
                                      </li>
                                  
                                </ul>
                        </nav>

                </div>


                
                <div class="panel-body">                    
                    {{ Form::open(['route' => ['cleanings.store', $store->id]]) }}

                        @include('cleanings.partials.form')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection