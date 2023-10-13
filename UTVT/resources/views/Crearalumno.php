<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear alumno</h1>
    {!! Form::open(['url' => '/almacenarAlumno', 'method' => 'post']) !!}
        @csrf
        <table border="1">
            <tbody>
                <tr>
                    <td>nombre del alumno</td>
                    <td><input type="text" name="nombreAlumno" id="nombreAlumno"></td>
                </tr>
                <tr>
                    <td>fn del alumno</td>
                    <td><input type="text" name="fnAlumno" id="fnAlumno"></td>
                </tr>
                <tr>
                    <td>genero del alumno</td>
                    <td><input type="text" name="generoAlumno" id="generoAlumno"></td>
                </tr>
                <tr>
                    <td>matricula del alumno</td>
                    <td><input type="text" name="matriculaAlumno" id="matriculaAlumno"></td>
                </tr>
                <tr>
                    <td>direccion del alumno</td>
                    <td><input type="text" name="direccionAlumno" id="direccionAlumno"></td>
                </tr>
                <tr>
                    <td>email del alumno</td>
                    <td><input type="text" name="emailAlumno" id="emialAlumno"></td>
                </tr>
                <tr>
                    <td>password del alumno</td>
                    <td><input type="text" name="passwordAlumno" id="passwordAlumno"></td>
                </tr>
                
                <tr>
                    <td>foto del alumno</td>
                    <td><input class="form-control" type="file" name="foto"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">guardar</button></td>
                </tr>
            </tbody>
        </table>
    {!! Form::close() !!}
</body>
</html>
