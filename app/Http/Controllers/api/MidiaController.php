<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Midia;

class MidiaController extends Controller
{

    public function index()
    {
        return Midia::all();
    }

    public function store(Request $request)
    {
        Midia::create($request->all());
    }

    public function show($id)
    {
        return Midia::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $midia = Midia::findOrFail($id);
        $midia->update($request->all());
    }

    public function destroy($id)
    {
        $midia = Midia::findOrFail($id);
        $midia->delete();
    }
}
