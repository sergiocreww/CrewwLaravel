<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class DevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $devolucion = FacadesDB::select('select * from detallesalida', []);

        $equipoController = new EquipoController();
        $equipos  = $equipoController->index1();

        $prestamoController = new prestamoController;
        $prestamos  = $prestamoController->index1();

        return view('devolucion', [
            'devolucion1' => $devolucion,
            'elprestamo' => $prestamos,
            'elequipo' => $equipos
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $devolucion = FacadesDB::select('select * from detallesalida', []);

        $equipoController = new EquipoController();
        $equipos  = $equipoController->index();

        $prestamoController = new prestamoController;
        $prestamos  = $prestamoController->index1();

        return view('devolucion', [
            'devolucion1' => $devolucion,
            'elprestamo' => $prestamos,
            'elequipo' => $equipos
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FacadesDB::insert('insert into `detallesalida`(`idDetalleSalida`,`fechaEntregaDetalleSalida`, `idSalida`, `idequipo`) VALUES (null,?,?,?)', [

            $request->fechaEntregaDetalleSalida,
            $request->fidSalida,
            $request->fidequipo,
        ]);
        return redirect()->route('devolucion');
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
        FacadesDB::update('update detallesalida set fechaEntregaDetalleSalida =?,idSalida=?,idequipo=?  where idDetalleSalida = ?', []);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    FacadesDB::delete('delete from detallesalida where idDetalleSalida = ?', []);
    }
}
