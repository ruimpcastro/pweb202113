<?php

namespace App\Http\Controllers;

use App\Diretor;
use Illuminate\Http\Request;

class DiretorController extends Controller
{

    /**
     * Análise e marcação da proposta como aprovada ou rejeitada
     *
     *
     */

    public function validarProposta()
    {
        //
    }

    /**
     * If proposta rejeitada:
     * Campo de texto para justificar a decisao do Diretor
     * Enviar aviso para empresa editar e voltar a submeter uma nova proposta
     */
    public function justificarPropostaRejeitada()
    {
        //
    }

    public function atribuirPropostaAluno()
    {
        //
    }

    public function atribuirPropostaSupervisor()
    {
        //
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
     * @param  \App\Diretor  $diretor
     * @return \Illuminate\Http\Response
     */
    public function show(Diretor $diretor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diretor  $diretor
     * @return \Illuminate\Http\Response
     */
    public function edit(Diretor $diretor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diretor  $diretor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diretor $diretor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diretor  $diretor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diretor $diretor)
    {
        //
    }
}