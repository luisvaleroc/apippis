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
        <!-- <div class="col-sm-4 text-left">
            <img src="https://i.imgur.com/V9aNqqM.jpg" alt="" width="140px">
        </div> -->
        <div class="col-sm-8 font-weight-bold text-right text-center">Monitoreo de control
            <br>salud e higiene del
            <br>personal
        </div>
        


    </div>
    <!-- <div class="row">
    <div class="col-sm-6 font-weight-bold letratitulo text-center ">Codigo: </div>
            <div class="col-sm-6 font-weight-bold letratitulo text-right ">Revisión N°</div>
            
        </div> -->
    <div class="row">
        <div class="col-sm-6 text-right font-weight-bold letratitulo">Fecha:{{ $cleaning2->created_at->format('d-m-Y') }}
</div>
        <!-- <div class="col-sm-6 font-weight-bold letratitulo">Hora:</div> -->
        <!-- <div class="col s4">Área/sección:</div> -->

    </div>

    

    <table class="table">
        <thead>
          
            <tr class=" text-center ">
                <th class="letratitulo" Colspan="1">Nombre</th>
                <th class="letratitulo" Colspan="1">Uniforme completo y limpio</th>
                <th class="letratitulo" Colspan="1">Uñas cortas</th>
                <th class="letratitulo" Colspan="1">Pelo corto/tomado</th>
                <th class="letratitulo" Colspan="1">Zapatos limpios</th>
                <th class="letratitulo" Colspan="1">Cofia cubre las orejas</th>
                <th class="letratitulo" Colspan="1">Ausencia de reloj o joyas</th>
                <th class="letratitulo" Colspan="1">Ausencia de maquillaje</th>
                <th class="letratitulo" Colspan="1">Ausencia de heridas</th>
                <th class="letratitulo" Colspan="1">Mascarilla cubre la nariz</th>
                <th class="letratitulo" Colspan="2">Observacion</th>
            </tr>

        </thead>
        <tbody>
        @foreach($cleanings as $cleaning)
            <tr class="text-center letracuerpo">
                <td  colspan="1">{{ $cleaning->employee->name }}</td>
                <td  colspan="1">{{ $cleaning->uniform }}</td>
                <td  colspan="1">{{ $cleaning->nail }}</td>
                <td  colspan="1">{{ $cleaning->hair }}</td>
                <td  colspan="1">{{ $cleaning->shoe }}</td>
                <td  colspan="1">{{ $cleaning->ear }}</td>
                <td  colspan="1">{{ $cleaning->jewelry }}</td>
                <td  colspan="1">{{ $cleaning->makeup }}</td>
                <td  colspan="1">{{ $cleaning->wound }}</td>
                <td  colspan="1">{{ $cleaning->mask }}</td>
                <td  colspan="2">{{ $cleaning->observation }}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
  
    <div class="row">
        <div class="col-sm-6 font-weight-bold letratitulo text-left">Nombre y firma monitor:</div>
        <div class="col-sm-6 font-weight-bold letratitulo text-right">Nombre y firma verificador:</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>


