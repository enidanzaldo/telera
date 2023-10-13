<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><table border="1">
    <thead>

            <h1>Crear Grupo</h1>

    </thead>
    <tbody>
        <tr>
            <form action="{{ route('almacenarGrupo') }}" method="post">
                {{ csrf_field() }}
            <td>nombre del grupo</td>
            <th><input type="text" name="nombreGrupo" id="nombreGrupo" ></th>
            </tr>
            <tr>
            <td>clave del grupo</td>
            <th><input type="text" name="claveGrupo" id="claveGrupo" ></th>
            </tr>
            <tr>
                <td colspan=2;><button type="submit">guardar</button></td>
            </tr>
            </form>
    </tbody>

</body>
</html>