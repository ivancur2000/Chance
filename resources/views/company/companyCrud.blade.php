<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Company ABM</title>
</head>
<body>

    <h1>Crud</h1>
    <h2>Empresas Registradas en Chance</h2><br>
    <a href="{{route ('company.create',  ['course_id' => Crypt::encrypt('1')]   )}}" type="button" class="btn btn-primary text-center">Agregar Empresa</a> <br><br>
    <table class='table table-striped'>
    <thead class='table-dark'>
    <tr>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>web_site</th>
    <th>Facebook</th>
    <th>Linkedin</th>
    <th>Twitter</th>
    <th>Cantidad empleados</th>
    <th colspan="2">Modificar</th>

    </tr>
    </thead>
    <tbody class='table-secondary'>
        @foreach ($company as $c)
    <tr>
        <td>{{$c->name}} </td>
        <td>{{$c->description}} </td>
        <td>{{$c->web_site}} </td>
        <td>{{$c->facebook}} </td>
        <td>{{$c->linkedin}} </td>
        <td>{{$c->twitter}} </td>
        <td>{{$c->employes}} </td>
        <td> <a href="/company/ {{ $c->id}}/edit " class='btn btn-primary'>Editar</a>
        </td>
        <td>
        <form action="{{ route('company.destroy', $c->id, ['course_id' => Crypt::encrypt('1') ]) }}" method="post">
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
