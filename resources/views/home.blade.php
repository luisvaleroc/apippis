@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PPIS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                    <a href="https://laravel.com/docs">Locales</a>
                    <a href="https://laracasts.com">Planillas</a>
                    <a href="https://laravel-news.com">Administracion</a>
                    <a href="https://blog.laravel.com"></a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
