<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //En la variable $datos se almacenan los datos de la tabla empleados paginados de 5 en 5
        $datos['empleados']=Empleados::paginate(5);

        //Pasamos todos los datos recuperados a la vista de index 
        return view('empleados.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Se almacenan en la variable $datosEmpleado todos los campos del formulario
        $datosEmpleado = request()->all();

        //A la variable $datosEmpleado se le quitan el campo _token
        $datosEmpleado = request()->except('_token');

        //Se verifica si hay un campo en el input de Foto
        if($request->hasFile('Foto')){

            //Lo que viene en el campo Foto se sube a la carpeta de uploads en storage
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        //Se insertan los campos del formilario a la base de datos
        Empleados::insert($datosEmpleado);

        //Se imprime los campos del formulario
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Encontramos el empleado especifico del ID
        $empleado = Empleados::findOrFail($id);

        //Retornamos la vista para editar el empleado con datos de ese empleado
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Se borra de la base de datos el empleado con el id especifico
        Empleados::destroy($id);
        
        return redirect('empleados');
    }
}
