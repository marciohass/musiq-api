<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ajuda;

class AjudaController extends Controller
{

    public function index()
    {
        return Ajuda::all();
    }

    public function store(Request $request)
    {
        Ajuda::create($request->all());
    }

    public function show($id)
    {
        return Ajuda::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $ajuda = Ajuda::findOrFail($id);
        $ajuda->update($request->all());
    }

    public function destroy($id)
    {
        $ajuda = Ajuda::findOrFail($id);
        $ajuda->delete();
    }
}
