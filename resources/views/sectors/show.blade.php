@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <nav id="navbar-central" class="navbar navbar-light bg-light">
                            <a class="navbar-brand" href="#">Empresas</a>
                            <ul class="nav nav-pills">
                              <li class="nav-item">
                                @can('sectors.create')
                                <a href="{{ route('sectors.create') }}" 
                                class="btn btn-sm btn-primary pull-right">
                                    Crear
                                </a>
                                @endcan
                              </li>
                              <li class="nav-item">
                                    @can('sectors.create')
                                    <a href="{{ route('sectors.index') }}" 
                                    class="btn btn-sm btn-success pull-right">
                                        Ver
                                    </a>
                                    @endcan
                                  </li>
                              
                            </ul>
                    </nav>

                </div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>  <a href="{{ route('changebrand.edit', $brand->id ) }}" 
                                        class="">
                                        {{ $brand->name }}
                                        </a>   </p>

                   



                    <p><strong>Sector</strong>       {{ $brand->sector }}</p>


                    <p><strong>Local</strong>
                    @foreach($brand->store as $store)
                          {{ $store->name }},
                            @endforeach
                            </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection