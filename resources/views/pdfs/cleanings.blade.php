
<style type="text/css">
      /* reset */

      *{
        border: 0;
        box-sizing: content-box;
        color: inherit;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        font-weight: inherit;
        line-height: inherit;
        list-style: none;
        margin: 0;
        padding: 0;
        text-decoration: none;
        vertical-align: top;
      }

      /* content editable */

      *[contenteditable] { border-radius: 0.10em; min-width: 1em; outline: 0;  cursor: pointer; display: inline-block;}

      *[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

      /*span[contenteditable] { display: inline-block; }*/

      /* heading */

      h1 { font: bold 100% Ubuntu, Arial, sans-serif; text-align: center; text-transform: uppercase; }

      /* table */

      table { font-size: 70%; table-layout: fixed; width: 95%; }
      table { border-collapse: separate; border-spacing: 2px; }
      th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
      th, td { border-radius: 0.25em; border-style: solid; }
      th { background: #EEE; border-color: #BBB; }
      td { border-color: #DDD; }

      /* page */

      html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; }
      html { background: #fff; cursor: default; }

      body { box-sizing: border-box; margin:0;}
      #wrapper{height: 29.7cm; margin: 0 auto; width: 21cm; }
      body { background: #FFF;}

      /* header */

      header { margin: 0 0 3em; }
      header:after { clear: both; content: ""; display: table; }

      header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
      header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
      header address p { margin: 0 0 0.25em; }
      header span, header img { display: block; float: right; }
      header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
      header img { max-height: 100%; max-width: 50%; }
      header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

      

      table.meta, table.balance { float: right; width: 36%; }
      table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

      /* table meta */

      table.meta th { width: 40%; }
      table.meta td { width: 60%; }

      /* table items */

      table.inventory { clear: both; width: 100%; }
      table.inventory th { font-weight: bold; text-align: center; }

      table.inventory td:nth-child(1) { width: 26%; }
      table.inventory td:nth-child(2) { width: 38%; }
      table.inventory td:nth-child(3) { text-align: right; width: 12%; }
      table.inventory td:nth-child(4) { text-align: right; width: 12%; }
      table.inventory td:nth-child(5) { text-align: right; width: 12%; }

      /* table balance */

      table.balance th, table.balance td { width: 50%; }
      table.balance td { text-align: right; }

      /* aside */

      aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
      aside h1 { border-color: #999; border-bottom-style: solid; }

      .cutw{position:relative;}
      /* javascript */

     

      @media print {
        * { -webkit-print-color-adjust: exact; }
        html { background: none; padding: 0; }
        body { box-shadow: none; margin: 0; }
        span:empty { display: none; }
        .add, .cut { display: none; }
      }

      @page { margin: 1; }
    </style>
   

<div class="continer center-block">
<h2 aling="center">Monitoreo de control salud e higiene del personal h2
</div>



<div class="panel-body container">
<table width="650px" cellpadding="5px" cellspacing="5px" border="1" class="center-block" >

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
                                
                            
                           
                            </tr>
                            @endforeach
                        </tbody>
               
                    </table>
<div class="row">

V: CUMPLE
                               X: NO CUMPLE
</div>
        
                              
       
                </div>
                <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"  >
    <style>
.texto-vertical-1 {
    writing-mode: vertical-lr;


        .rt {
            -moz-transform: rotate(-90.0deg);
            /* FF3.5+ */
            -o-transform: rotate(-90.0deg);
            /* Opera 10.5 */
            -webkit-transform: rotate(-90.0deg);
            /* Saf3.1+, Chrome */
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0.083);
            /* IE6,IE7 */
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
            /* IE8 */
        }
        
        .letratitulo {
            font-size: 14px;
        }
        
        .letracuerpo {
            font-size: 12px;
        }

        .contenedor {
  width: 40%;
  max-width: 500px;
}
    </style>

</head>


                   

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>