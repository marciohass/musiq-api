<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Discografia;

class DiscografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Discografia::all();
        $discografias = Discografia::select('discografias.*', 'bandas.nome as banda', 'midias.descricao as midia')
            ->join('bandas', 'discografias.id_banda', '=', 'bandas.id')
            ->join('midias', 'discografias.id_midia', '=', 'midias.id')
            // ->groupBy('album')
            ->get();

        return $discografias;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Discografia::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Discografia::findOrFail($id);
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
        $discografia = Discografia::findOrFail($id);
        $discografia->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discografia = Discografia::findOrFail($id);
        $discografia->delete();
    }
}
