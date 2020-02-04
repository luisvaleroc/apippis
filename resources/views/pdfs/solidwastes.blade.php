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
            font-size: 14px;
        }
        
        .letracuerpo {
            font-size: 12px;
        }
        .margen{
            margin-left: -15px;
        }
        </style>
</head>
<body>
    <div class="col-sm-12 text-center">Formato de pesaje diario de residuos sólidos no peligrosos</div>
    <div class="col-sm-12 text-center">Administracion del campus</div>
                

    
    
<table class="table margen">
        <thead class="letratitulo">
            <tr class="text-center">

                <th colspan="7"> Reciclaje</th>
                <th colspan="2"> Organicos</th>
                <th colspan="2"> Ordinarios</th>
                <th colspan="1"> Total día</th>

            </tr>
            <tr class="text-center">
                <th colspan="1">Fecha</th>
                <th colspan="1">Papel Archivo <br>kg</th>
                <th colspan="1">Cartón <br>kg</th>
                <th colspan="1">Plástico<br>kg</th>
                <th colspan="1">PVC <br>kg</th>
                <th colspan="1">Chatarra <br>kg</th>
                <th colspan="1">Vidrio<br> Kg</th>
                <th colspan="2">Desechos de comida <br>y frutas</th>
                <th colspan="2">KG</th>
                <th colspan="1">KG</th>
            </tr>

        </thead>
        <tbody class="letracuerpo">

        @foreach($solidwastes as $solidwaste)
            <tr class="text-center">
            <td colspan="1">{{ $solidwaste->created_at->format('d-m-Y') }}</td>
                <td colspan="1">{{ $solidwaste->paper }}</td>
                <td colspan="1">{{ $solidwaste->paperboard }}</td>
                <td colspan="1">{{ $solidwaste->plastic }}</td>
                <td colspan="1">{{ $solidwaste->pvc }}</td>
                <td colspan="1">{{ $solidwaste->scrap }}</td>
                <td colspan="1">{{ $solidwaste->glass }}</td>
                <td colspan="2">{{ $solidwaste->food }}</td>
                <td colspan="2">{{ $solidwaste->ordinary }}</td>
                <td colspan="1">{{ $solidwaste->paper + $solidwaste->paperboard + $solidwaste->plastic + $solidwaste->pvc + $solidwaste->scrap + $solidwaste->glass + $solidwaste->food + $solidwaste->ordinary   }}</td>
            </tr>
        @endforeach

        </tbody>


    </table>
    <div class="row">
        <div class="col-sm-6 font-weight-bold letratitulo text-left">Nombre y firma monitor:</div>
        <div class="col-sm-6 font-weight-bold letratitulo text-right">Nombre y firma verificador:</div>

    </div>
</body>
</html>