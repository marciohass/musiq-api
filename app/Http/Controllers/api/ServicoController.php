<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Servico;

class ServicoController extends Controller
{

    public function index()
    {
        return Servico::all();
    }

    public function store(Request $request)
    {
        Servico::create($request->all());
    }

    public function show($id)
    {
        return Servico::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servico = Servico::findOrFail($id);
        $servico->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico = Servico::findOrFail($id);
        $servico->delete();
    }
}
