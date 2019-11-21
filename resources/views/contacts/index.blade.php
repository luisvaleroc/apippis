@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Contactos
                    <nav id="navbar-central" class="navbar navbar-light bg-light pull-right ">
                        {{ Form::open(['route' => 'contacts.index', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) }}
                            <div class="form-group mx-sm-3 mb-2">
                                {{ Form::text('name', null, ['placeholder' => 'Buscar contacto','class' => 'form-control', 'id' => 'name']) }}
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Buscar</button>    
                         {{ Form::close() }}
                    </nav>
                   
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Empresa</th>
                                <th>Financiamiento</th>
                                <th>Newsletter</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->company }}</td>
                                <td>{{ $contact->funding }}</td>
                                <td>{{ $contact->newsletter }}</td>
                                
                                @can('contacts.edit')
                                <td width="10px">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a> 
                                </td>
                                @endcan
                                @can('contacts.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['contacts.destroy', $contact->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" Onclick="return confirm('Are you sure you want to delete this item?');" >
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $contacts->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection