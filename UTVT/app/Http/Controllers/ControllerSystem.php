<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupos;
use App\Models\Alumnos;

class ControllerSystem extends Controller
{
    public function indexGrupos()
    {
        $query = Grupos::all();
        return view('indexGrupos')->with(['Grupos' => $query]);
    }

    public function indexAlumnos()
    {
        $query = Alumnos::all();
        return view('indexAlumno')->with(['Alumnos' => $query]);
    }

    public function detallesGrupo()
    {
        return view('CrearGrupo');
    }

    public function detallesAlumno()
    {
        return view('CrearAlumno');
    }

    public function alumnoAlmacenado()
    {
        return view('CrearAlumno'); // Corregido el nombre de la vista
    }
    
    public function almacenarAlumno(Request $request)
    {
        $alumno = new Alumnos([
            'nombre' => $request->nombreAlumno,
            'fn' => $request->fnAlumno,
            'genero' => $request->generoAlumno,
            'matricula' => $request->matriculaAlumno,
            'direccion' => $request->direccionAlumno,
            'email' => $request->emailAlumno,
            'password' => $request->passwordAlumno,
            'foto' => $request->foto,
        ]);

        $alumno->save();

        return redirect()->route('indexAlumnos');
    }

    public function storegrupos(Request $request)
    {
        $grupo = new Grupos([
            'clave' => $request->claveGrupo,
            'nombre' => $request->nombreGrupo,
        ]);

        $grupo->save();

        return redirect()->route('indexGrupos');
    }
}



