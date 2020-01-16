@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <nav id="navbar-central" class="navbar navbar-light bg-light">
                            <a class="navbar-store" href="#">Local</a>
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
                                        @can('employees.index')
                                        <a href="{{ route('employees.index', $store->id) }}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Empleados
                                        </a>
                                        @endcan
                                      </li>
                                      <li class="nav-item">
                                        @can('rooms.index')
                                        <a href="{{ route('rooms.index', $store->id) }}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Salas
                                        </a>
                                        @endcan
                                      </li>
                                      <li class="nav-item">
                                    @can('stores.show')
                                    <a href="{{ route('storseusers.index') }}" 
                                    class="btn btn-sm btn-success pull-right">
                                        Usuarios Tienda
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
                    <table id="stores" class="table table-striped table-hover">
                        <thead class="">
                            <tr>
                                <th width="500px">Planilla</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               <td>Desechos Solidos</td>
                               <td width="10px">
    <a href="{{ route('solidwastes.index', $store->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>

                            </tr>

                            <tr>
                               <td>Salud e Higiene</td>
                               <td width="10px">
    <a href="{{ route('cleanings.index', $store->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>

<tr>
                               <td>Limpieza y sanitización</td>
                               <td width="10px">
    <a href="{{ route('plants.index', $store->id) }}" 
    class="btn btn-sm btn-default">
        ver
    </a>
</td>

                            </tr>

                            </tr>

                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection