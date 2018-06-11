<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Cliente; 


class ClienteController extends Controller
{
    public function index()
    {
    	$clientes_list= Cliente::all();
    	return view("clientes.index", ["clientes_list"=> $clientes_list]);
    }

    public function create()
    {
    	return view("clientes.create");
    }

    public function store(Request $request)
    {
    	$nombre= $request->input("txtNombre");
    	$apellido= $request->input("txtApellido");
    	$dni= $request->input("txtDNI");
    	$fechaNacimiento= $request->input("txtFechaNacimiento");
    	$genero= $request->input("txtGenero");
    	$fechaAlta= $request->input("txtFechaAlta");

    	$persona= new Persona();
    	$persona->nombre= $nombre;
    	$persona->apellido= $apellido;
    	$persona->dni= $dni;
    	$persona->fecha_nacimiento= $fechaNacimiento;
    	$persona->genero= $genero;
    	$persona->save();

    	$cliente= new Cliente();
    	$cliente->fecha_alta= $fechaAlta;
    	$cliente->persona_id= $persona->id;
    	$cliente->save();

    	$mensaje= "Los datos han sido cargados correctamente";
    	return redirect("clientes/create")->with("mensaje", $mensaje);
    }

    public function show($id)
    {
    	$cliente= Cliente::find($id);
    	return view("cliente.show", ["cliente"=>$cliente]);
    }

    public function destroy($id)
    {
    	$cliente= Cliente::find($id);
    	$persona= $cliente->persona;
    	$cliente->delete();
    	$cliente->delete();

    	$mensaje= "El registro se ha eliminado correctamente";
    	return redirect("clientes")->with("mensaje", $mensaje);
    }

    public function edit($id)
    {
    	$cliente= Cliente::find($id);
    	return view("clientes.edit", ["cliente"=>$cliente]);
    }

    public function update(Request $request, $id)
    {
    	$nombre= $request->input("txtNombre");
    	$apellido= $request->input("txtApellido");
    	$dni= $request->input("txtDNI");
    	$fechaNacimiento= $request->input("txtFechaNacimiento");
    	$genero= $request->input("txtGenero");
    	$fechaAlta= $request->input("txtFechaAlta");

    	$cliente = Cliente::find($id);

    	$cliente->persona->nombre= $nombre;
    	$cliente->persona->apellido= $apellido;
    	$cliente->persona->dni= $dni;
    	$cliente->persona->fecha_nacimiento= $fechaNacimiento;
    	$cliente->persona->genero= $genero;
    	$cliente->fecha_alta= $fechaAlta;
    	$cliente->persona->save();

    	$mensaje= "Los datos han sido modificados";
    	return redirect("clientes/".$id."/edit")->with("mensaje", $mensaje);
    }
}
