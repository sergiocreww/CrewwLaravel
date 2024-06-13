<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Http\Request;


class prestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamo = FacadesDB::select('select * from salidaequipo', []);

        $equipoController = new EquipoController();
        $equipos  = $equipoController->index();

        $UsuarioController = new UsuarioController();
        $usuarios  = $UsuarioController->index();

        $AdministradorController = new AdministradorController();
        $administrador  = $AdministradorController->index();

        return view('prestamo',[
            'elprestamo' => $prestamo,
            'elequipo' => $equipos,
            'unusuario' => $usuarios,
            'administrador'=> $administrador,
        ]);
    }
    public function index1(){
        $prestamo = FacadesDB::select('select * from salidaequipo', []);
        return $prestamo;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FacadesDB::insert('insert INTO `salidaequipo`(idsalida,`fechasalida`, `idusuario`, `idAdministrador`) VALUES (null,?,?,?)', [

            $request->fechasalida,
            $request->fidusuario,
            $request->fidAdministrador,

        ]);
        return redirect()->route('prestamo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FacadesDB::update('update salidaequipo set fechasalida =?,idusuario=?,idadministrador=?  where idsalida = ?', [
            $request->fechasalida,
            $request->idusuario,
            $request->idadministrador,
        ]);
        return redirect()->route('prestamo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FacadesDB::delete('delete from salidaequipo where idsalida = ?', []);
        return redirect()->route('prestamo');
    }
}
