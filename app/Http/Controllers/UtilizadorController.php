<?php

namespace App\Http\Controllers;

use App\Diretor;
use App\Entidade;
use App\Orientador;
use App\Utilizador;
use Illuminate\Http\Request;

class UtilizadorController extends Controller
{
    public function listarUtilizadoresLogin()
    {
        $d = Diretor::all();
        $e = Entidade::all();
        $o = Orientador::all();
        return view("login", ['diretores'=>$d, 'entidades'=>$e, 'orientadores'=>$o]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Utilizador  $utilizador
     * @return \Illuminate\Http\Response
     */
    public function show(Utilizador $utilizador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utilizador  $utilizador
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilizador $utilizador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utilizador  $utilizador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilizador $utilizador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utilizador  $utilizador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilizador $utilizador)
    {
        //
    }
}
