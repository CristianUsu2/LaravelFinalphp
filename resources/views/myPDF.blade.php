<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda Axes | Administrador</title>
    <link rel="stylesheet" href="Usuario/css/bootstrap.min.css">

</head>
<body>
    <h1>INFORME DEL STOCK DE LOS PRODUCTOS</h1>
    <p>Este es el informe del Stock de los productos.</p>

    <table class="table table-bordered data-table" id="usuarios">

<thead class="table-dark">

    <tr>

        <th width="50">Código</th>

        <th>Número de Documento</th>

        <th>Nombre</th>

        <th>Apellido</th>

        <th width="50px">Correo</th>

        <th>Teléfono</th>

    </tr>

</thead>

<tbody>
    @foreach ($users as $user)
        
    <tr>
        <td>{{$user->Id_Usuarios}}</td>
        <td>{{$user->identificacion}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->apellido}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->telefono}}</td>

    </tr>
    @endforeach

</tbody>

</table>


</body>
</html>