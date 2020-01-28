<table>
    <thead>
    <tr>
    <th>Creado</th>  <th>Papel (Kg)</th>

                            
<th>Carton (Kg)</th>
<th>PVC (Kg)</th>
<th>Chatarra (Kg)</th>
<th>Vidrio (Kg)</th>
<th>Comida y fruta (Kg)</th>
<th>Ordinarios (Kg)</th>
<th>Ordinarios</th>
<th>Total (Kg)</th>
<th>Observación</th>
<th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($solidwastes as $solidwaste)
        <tr>
   
        <td >{{ $solidwaste->created_at->format('d-m-Y') }}</td>
                                <td>{{ $solidwaste->paper }}</td>
                                <td>{{ $solidwaste->paperboard }}</td>
                                <td>{{ $solidwaste->plastic }}</td>
                                <td>{{ $solidwaste->pvc }}</td>
                                <td>{{ $solidwaste->scrap }}</td>
                                <td>{{ $solidwaste->glass }}</td>
                                <td>{{ $solidwaste->food }}</td>
                                <td>{{ $solidwaste->ordinary }}</td>
                                <td>{{ $solidwaste->paper + $solidwaste->paperboard + $solidwaste->plastic + $solidwaste->pvc + $solidwaste->scrap + $solidwaste->glass + $solidwaste->food + $solidwaste->ordinary   }}</td>
                                <td>{{ $solidwaste->observation }}</td> 
    
        </tr>
    @endforeach
    </tbody>
</table>