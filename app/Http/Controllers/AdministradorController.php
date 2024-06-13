<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as FacadesDB;

use Illuminate\Http\Request;

class Administradorcontroller extends Controller
{
    public function index()
    {
        $administradores = FacadesDB::select('select * from administrador', []);

        return $administradores;
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        FacadesDB::insert('insert INTO `administrador`(idadministrador,`cedulaadministrador`, `nombreadministrador`, `aprellidoadministrador`, `telefonoadministrador;`) VALUES (null,?,?)', []);
        return "Insertado";
    }

    public function update(Request $request, string $id)
    {
        FacadesDB::update('update administrador set cedulaadministrador =?,nombreadministrador=?,aprellidoadministrador=?,telefonoadministrador=?  where idadministrador = ?', []);
    }


    public function destroy(string $id)
    {
        FacadesDB::delete('delete from administrador where idadministrador = ?', [
        ]);
    }
}
