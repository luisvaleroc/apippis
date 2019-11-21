@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <nav id="navbar-central" class="navbar navbar-light bg-light">
                                <a class="navbar-brand" href="#">Usuarios</a>
                                <ul class="nav nav-pills">
                                  
                                  <li class="nav-item">
                                        @can('roles.create')
                                        <a href="{{ route('contacts.index') }}" 
                                        class="btn btn-sm btn-success pull-right">
                                            Ver
                                        </a>
                                        @endcan
                                      </li>
                                  
                                </ul>
                        </nav>
                </div>

                <div class="panel-body">                    
                    {!! Form::model($contact, ['route' => ['contacts.update', $contact->id],
                    'method' => 'PUT']) !!}

                        @include('contacts.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection