<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>alumnos</h1>
    <table border="1">
        <tr>
        <th>id_alumnos</th>
        <th>nombre</th>
        <th>fn</th>
        <th>genero</th>
        <th>matricula</th>
        <th>direccion</th>
        <th>email</th>
        <th>password</th>
        <th>foto</th>
        <th>id_grupo</th>
        </tr>

        @foreach ($Alumnos as $alumnos)
        <tr>
            <td>{{ $alumnos->id_alumnos}}</td>
            <td>{{ $alumnos->nombre}}</td>
            <td>{{ $alumnos->fn}}</td>
            <td>{{ $alumnos->genero}}</td>
            <td>{{ $alumnos->matricula}}</td>
            <td>{{ $alumnos->direccion}}</td>
            <td>{{ $alumnos->email}}</td>
            <td>{{ $alumnos->password}}</td>
            <td>{{ $alumnos->foto}}</td>
            <td>{{ $alumnos->id_grupo}}</td>
        @endforeach
    </table>

</body>
</html>