<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bemvindo;

class BemvindoController extends Controller
{

    public function index()
    {
        return Bemvindo::all();
    }

    public function store(Request $request)
    {
        Bemvindo::create($request->all());
    }

    public function show($id)
    {
        return Bemvindo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $bemvindo = Bemvindo::findOrFail($id);
        $bemvindo->update($request->all());
    }

    public function destroy($id)
    {
        $bemvindo = Bemvindo::findOrFail($id);
        $bemvindo->delete();
    }
}
