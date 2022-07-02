
    @include('layouts.company')


    <h1>Crud</h1>
    <h2>Creacion de ofertas laborales</h2><br>
    <a href="{{route ('companies.index',  ['course_id' => Crypt::encrypt('1')]   )}}" type="button" class="btn btn-primary text-center">Empresas</a>
    <a href="{{route ('jobOffer.create',  ['course_id' => Crypt::encrypt('1')]   )}}" type="button" class="btn btn-primary text-center">Agregar Oferta</a> <br><br>
    <table class='table table-striped'>
    <thead class='table-dark'>

        <tr>

    <th>Titulo</th>
    <th>Tipo de trabajo</th>
    <th>Modalidad</th>
    <th>Salario</th>   
    <th>Descripcion</th>
    <th>Empresa</th>
    <th>Vacaciones</th>
    <th>Prima vacacional</th>
    <th>Seguro social</th>
    <th>Aguinaldo</th>
    <th>Requisito nombre</th>
    <th>Prioridad</th>
    <th>Descripcion req</th>
    <th>Modificar</th>
    <th>Eliminar</th>
   
    </tr>
    </thead>
    <tbody class='table-secondary'>
        @foreach ($joboffer as $j)
    <tr>
        <td>{{ $j->title }} </td>
        <td>{{$j->type_job}} </td>
        <td>{{$j->modality}} </td>
        <td>{{$j->salary}} </td>
        <td>{{$j->description}} </td>
        <td>{{$j->company->name}}</td> </td>
        <td hidden>{{$idJ=$j->id}} </td>
        <td> 
        @if( $j->benefit->vacations ==1) Si
        @else   
         No
        @endif
        </td>
     <td> 
        @if( $j->benefit->vacation_bonus ==1) Si
        @endif    
        @if( $j->benefit->vacation_bonus ==0) No 
        @endif
     </td>
     <td> 
        @if( $j->benefit->social_insurance ==1) Si
        @endif    
        @if( $j->benefit->social_insurance ==0) No 
        @endif
     </td>
     <td> 
        @if( $j->benefit->life_insurance ==1) Si
        @endif
        @if( $j->benefit->life_insurance ==0) No 
        @endif
     </td>
    @foreach($requi as $r)

    <td hidden>{{$id=$r->joboffer_id}} </td>
     @if( $idJ==$id)
     <td>{{$r->name}} </td>
     <td>{{$r->priority}} </td>
     <td>{{$r->description}} </td>
     @endif

   
    @endforeach
     
        <td> <a href="/jobOffer/ {{ $j->id}}/edit " class='btn btn-primary'>Editar</a> 
        </td>
        <td>
        <form action="{{ route('jobOffer.destroy', $j->id, ['course_id' => Crypt::encrypt('1') ]) }}" method="post">
                @csrf
                @method ('DELETE')
                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
        </td>
    </tr> @endforeach
    </tbody>
 </table>
