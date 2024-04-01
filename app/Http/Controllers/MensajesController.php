<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class MensajesController extends Controller
{
    /**
     * Almacena un nuevo mensaje en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_usuario' => 'required',
            'mensaje' => 'required',
            'telefono' => 'required',
        ]);

        // Crear un nuevo mensaje en la base de datos
        Mensaje::create($request->all());

        // Redireccionar a la página anterior con un mensaje de éxito
        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}
