<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaninoRequest;
use App\Http\Requests\RacaRequest;
use App\Models\Canino;
use App\Models\Raca;
use Illuminate\Http\Request;

class RacaController extends Controller
{
    public function index()
    {
        return view('raca.index', [
            'racas' => Raca::all()
        ]);
    }

    public function create()
    {
        return view('raca.create', [
            'racas' => Raca::all()
        ]);
    }

    public function store(RacaRequest $request)
    {
        $raca = new Raca();
        $raca->fill($request->except('_token'));

        if ($raca->save()) {
            return redirect()->route('raca.index')->with('success', 'Raça cadastrado com sucesso!');
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => 'Ocorreu um erro inesperado!']);
        }
    }

    public function update(Raca $raca)
    {
        return view('raca.update', [
            'raca' => $raca
        ]);
    }

    public function edit(RacaRequest $request, Raca $raca)
    {
        $raca->fill($request->except('_token'));

        if ($raca->save()) {
            return redirect()->route('raca.index')->with('success', 'Raça atualizado com sucesso!');
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => 'Ocorreu um erro inesperado!']);
        }
    }

    public function destroy(Raca $raca)
    {
        $raca->delete();
        return redirect()->route('raca.index')->with('success', 'Raça deletado com sucesso!');
    }

}
