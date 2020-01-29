
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
  

    <style>
        .letratitulo {
            font-size: 10px;
        }
        
        .letracuerpo {
            font-size: 8px;
        }
        </style>
</head>
<body>
<div class="row text-center">
        <div class="col-sm-4 text-left">
        </div>
        <div class="col-sm-8 font-weight-bold text-right">Registro monitoreo salud e higiene del
personal 
            <br>Limpieza y sanitizacion
            
        </div>
<table id="cleanings" class="display nowrap" style="width:100%">
                        <thead class="">
                            <tr>
                                <th >Creado</th>
                                <th> Nombre</th>
                                <th>Rut</th>
                                <th>Nariz</th>
                                <th>Heridas</th>
                                <th>Maquillaje</th>
                                <th>Joyas</th>
                                <th>Orejas</th>
                                <th>Zapatos</th>
                                <th>Pelo</th>
                                <th>Uñas</th>
                                <th>Uniforme</th>      
                                <th>Observacón</th>                           
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cleanings as $cleaning)
                            <tr>
                            <td idth="30px">{{ $cleaning->created_at->format('d-m-Y') }}</td>
                                <td>{{ $cleaning->employee->name }}</td>
                                <td>{{ $cleaning->employee->rut }}</td>
                                <td>{{ $cleaning->mask }}</td>
                                <td>{{ $cleaning->wound }}</td>
                                <td>{{ $cleaning->makeup }}</td>
                                <td>{{ $cleaning->jewelry }}</td>
                                <td>{{ $cleaning->ear }}</td>
                                <td>{{ $cleaning->shoe }}</td>
                                <td>{{ $cleaning->hair }}</td>
                                <td>{{ $cleaning->nail }}</td>
                                <td>{{ $cleaning->uniform }}</td>
                               
                                <td>{{ $cleaning->observation }}</td>
                                </tr>
                                @endforeach
                            

                        </tbody>
         
                    </table>