<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Privacidade;

class PrivacidadeController extends Controller
{

    public function index()
    {
        return Privacidade::all();
    }

    public function store(Request $request)
    {
        Privacidade::create($request->all());
    }

    public function show($id)
    {
        return Privacidade::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $privacidade = Privacidade::findOrFail($id);
        $privacidade->update($request->all());
    }

    public function destroy($id)
    {
        $privacidade = Privacidade::findOrFail($id);
        $privacidade->delete();
    }
}
