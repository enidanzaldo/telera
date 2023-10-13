<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear alumno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        td {
            border: 1px solid #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
        }
        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Crear alumno</h1>
    <form action="/almacenarAlumno" method="post" enctype="multipart/form-data">
        <table>
            <tbody>
                <tr>
                    <td>Nombre del alumno</td>
                    <td><input type="text" name="nombreAlumno" id="nombreAlumno"></td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento del alumno</td>
                    <td><input type="text" name="fnAlumno" id="fnAlumno"></td>
                </tr>
                <tr>
                    <td>Género del alumno</td>
                    <td><input type="text" name="generoAlumno" id="generoAlumno"></td>
                </tr>
                <tr>
                    <td>Matrícula del alumno</td>
                    <td><input type="text" name="matriculaAlumno" id="matriculaAlumno"></td>
                </tr>
                <tr>
                    <td>Dirección del alumno</td>
                    <td><input type="text" name="direccionAlumno" id="direccionAlumno"></td>
                </tr>
                <tr>
                    <td>Email del alumno</td>
                    <td><input type="text" name="emailAlumno" id="emailAlumno"></td>
                </tr>
                <tr>
                    <td>Password del alumno</td>
                    <td><input type="password" name="passwordAlumno" id="passwordAlumno"></td>
                </tr>
                <tr>
                    <td>Foto del alumno</td>
                    <td><input class="form-control" type="file" name="foto"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Guardar</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
