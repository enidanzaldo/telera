<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>grupo</h1>
    <table border="1">
        <tr>
        <th>id_grupo</th>
        <th>clave</th>
        <th>nombre</th>
        </tr>

        @foreach($Grupos as $Grupos)
        <tr>
            <td>{{ $grupo->id_grupo}}</td>
            <td>{{ $grupo->clave}}</td>
            <td>{{ $grupo->nombre}}</td>
        @endforeach
    </table>

    
</body>
</html>