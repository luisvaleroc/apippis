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
            <img src="https://i.imgur.com/V9aNqqM.jpg" alt="" width="140px">
        </div>
        <div class="col-sm-8 font-weight-bold text-right">Registro monitoreo 
            <br>Limpieza y sanitizacion
            
        </div>
        


    </div>
    <!-- <div class="row">
    <div class="col-sm-6 font-weight-bold letratitulo text-center ">Codigo: </div>
            <div class="col-sm-6 font-weight-bold letratitulo text-right ">Revisión N°</div>
            
        </div>
    <div class="row">
        <div class="col-sm-6 text-left font-weight-bold letratitulo">Planta proceso sala de xxxx</div> -->
        <div class="col-sm-6 font-weight-bold letratitulo text-right">Mes: {{   date('m', strtotime($plant2->created_at)) }}</div>
        <!-- <div class="col s4">Área/sección:</div> -->

    </div>

    

    <table class="table">
        <thead>
          
            <tr class=" text-center ">
                <th class="letratitulo" Colspan="1">Dias</th>
                <th class="letratitulo" Colspan="1">Sala</th>
                <th class="letratitulo" Colspan="1">Equipo 1</th>
                <th class="letratitulo" Colspan="1">Equipo 2</th>
                <th class="letratitulo" Colspan="1">Equipo 3</th>
                <th class="letratitulo" Colspan="1">Pisos</th>
                <th class="letratitulo" Colspan="1">Paredes</th>
                <th class="letratitulo" Colspan="1">Basureros</th>
                <th class="letratitulo" Colspan="1">Observación</th>
                <th class="letratitulo" Colspan="1">Acciones</th>
                <!-- <th class="letratitulo" Colspan="3">Acción correctiva</th> -->
                
            </tr>

        </thead>
        <tbody>
        @foreach($plants as $plant)
            <tr class="text-center letracuerpo">
                <td  colspan="1">{{   date('d', strtotime($plant2->created_at)) }}</td>
                <td  colspan="1">{{ $plant->name }}</td>
                <td  colspan="1">{{ $plant->equip1 }}</td>
                <td  colspan="1">{{ $plant->equip2 }}</td>
                <td  colspan="1">{{ $plant->equip3 }}</td>
                <td  colspan="1">{{ $plant->floor }}</td>
                <td  colspan="1">{{ $plant->wall }}</td>
                <td  colspan="1">{{ $plant->dump }}</td>
                <td  colspan="1">{{ $plant->observation }}</td>
                <td  colspan="1">{{ $plant->action }}</td>
                
                <!-- <td  colspan="3">Esto es una observación</td> -->
            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="row letratitulo">
        <div class="col-sm-6 text-left font-weight-bold">V: Cumple</div>
        <div class="col-sm-6 font-weight-bold text-right">X: no cumple</div>
    </div>
  
    <div class="row">
        
        <div class="col-sm-12 font-weight-bold letratitulo text-left">Observaciones:</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
