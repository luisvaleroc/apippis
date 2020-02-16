<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
           
    
                <div class="top-right links">
                    @auth

                            <a href="{{ route('auth_logout') }}">Salir</a>
                    @endauth
                </div>

            <div class="content">
                <div class="title m-b-md">
                <img src="{{ asset('img/logo-2.png') }}" alt="..." width="120" class="img-rounded">

                </div>
                @if(auth()->user()->brand_id  == null)
	               <h1> No tiene una empresa asignada, comuniquese con soporte</h1>
	            @endif
                <div class="links">
                    @can('brands.create')
                    <a href="{{ route('brands.index') }}">Administración</a>
                    @endcan
                    @can('stores.create')
                    <a href="{{ route('stores.index') }}">Locales</a>
                    @endcan
                   @if(auth()->user()->store != null)

                    @can('stores.show')
                    <a href="{{ route('stores.show', auth()->user()->store->id) }}">Planillas</a>
                    @endcan
                    @endif
                    <a href="https://ppis.cl">Web</a>
             
                    
                </div>
            </div>
        </div>
    </body>
</html>


