
<div class="panel-body">
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

                                <th>Acciones</th>
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
                        <tfoot>
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

                                <th>Acciones</th>
            </tr>
        </tfoot>
                    </table>
                </div>
