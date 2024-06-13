<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Http\Request;
use PHPUnit\Event\TestRunner\EventFacadeSealedSubscriber;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipo = FacadesDB::select('select * from equipo', []);

        return view('equipo', [
            'elequipo' => $equipo
        ]);
    }
    public function index1(){
        $elequipo = FacadesDB::select('select * from equipo', []);
        return $elequipo;
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


        FacadesDB::insert('insert INTO `equipo`(idequipo,`marcaE`, `codigoE`, `colorE`, `despE` , `estadoE`) VALUES (null,?,?,?,?,?)', [
            $request->marcaE,
            $request->codigoE,
            $request->colorE,
            $request->despE,
            $request->estadoE,
        ]);
        return redirect()->route('equipo');
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
        FacadesDB::update('update equipo set marcaE =?,codigoE=?,colorE=?,despE=?,estadoE=?  where idequipo = ?', [
            $request->fmarcaE,
            $request->fcodigoE,
            $request->fcolorE,
            $request->fdespE,
            $request->festadoE
        ]);
        return redirect()->route('equipo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FacadesDB::delete('delete from equipo where idequipo = ?', [

        ]);
        return redirect()->route('equipo');
    }
    // public function desc(){
    //     return $this->hasOne(equipo::class,'idequipo','idequipo');
    // }
}
