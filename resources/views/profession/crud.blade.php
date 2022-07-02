<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Profesiones y puestos</title>
</head>
<body>

    <h1>Crud</h1>
    <h2>Creacion de profesiones y puestos</h2><br>
    <a href="{{route ('companies.index',  ['course_id' => Crypt::encrypt('1')]   )}}" type="button" class="btn btn-primary text-center">Empresas</a>
    <a href="{{route ('profession.create',  ['course_id' => Crypt::encrypt('1')]   )}}" type="button" class="btn btn-primary text-center">Agregar</a>
   <br> <br>
    <table class='table table-striped'>
    <thead class='table-dark'>
        <tr>   
            <th>Puesto</th>
            <th>Profesion</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody class='table-secondary'>
      
        @foreach ($jobP as $pro)
    <tr>
        <td>{{$pro->name}} </td>
        <td>{{$pro->profession->name}} </td>

        
        <td> <a href="/profession/ {{ $pro->id}}/edit " class='btn btn-primary'>Editar</a> 
        </td>
        <td>
        <form action="{{ route('profession.destroy', $pro->id, ['course_id' => Crypt::encrypt('1') ]) }}" method="post">
                @csrf
                @method ('DELETE')
                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
        </td>
    </tr> @endforeach

    </tbody>
 </table>
</body>
</html>