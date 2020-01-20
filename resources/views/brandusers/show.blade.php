@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <nav id="navbar-central" class="navbar navbar-light bg-light">
                                <a class="navbar-brand" href="#">Usuario</a>
                                <ul class="nav nav-pills">
                                  
                                  <li class="nav-item">
                                        @can('roles.create')
                                        <a href="{{ route('brandusers.index') }}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Ver
                                        </a>
                                        @endcan
                                      </li>
                                  
                                </ul>
                        </nav>
                </div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $user->name }}</p>
                    <p><strong>Email</strong>      {{ $user->email }}</p>
                    <p><strong>Telefono</strong>      {{ $user->phone }}</p>
                    <p><strong>Local</strong>
                    @foreach($user->brand->store as $store)
                          {{ $store->name }},
                            @endforeach
                            </p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection