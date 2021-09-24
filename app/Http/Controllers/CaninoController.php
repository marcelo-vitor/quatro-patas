<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaninoRequest;
use App\Models\Canino;
use App\Models\Raca;
use Illuminate\Http\Request;

class CaninoController extends Controller
{
    public function index()
    {
        $caninos = Canino::all();
        return view('canino.index', [
            'caninos' => $caninos
        ]);
    }

    public function create()
    {
        return view('canino.create', [
            'racas' => Raca::all()
        ]);
    }

    public function store(CaninoRequest $request)
    {
        $canino = new Canino();
        $canino->fill($request->only(['name', 'sexo']));
        $canino->raca_id = $request->raca_id;

        if ($canino->save()) {
            return redirect()->route('canino.index')->with('success', 'Canino cadastrado com sucesso!');
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => 'Ocorreu um erro inesperado!']);
        }
    }

    public function update(Canino $canino)
    {
        return view('canino.update', [
            'canino' => $canino,
            'racas' => Raca::all()
        ]);
    }

    public function edit(CaninoRequest $request, Canino $canino)
    {
        $canino->fill($request->only(['name', 'sexo']));
        $canino->raca_id = $request->raca_id;

        if ($canino->save()) {
            return redirect()->route('canino.index')->with('success', 'Canino atualizado com sucesso!');
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => 'Ocorreu um erro inesperado!']);
        }
    }

    public function destroy(Canino $canino)
    {
        $canino->delete();
        return redirect()->route('canino.index')->with('success', 'Canino deletado com sucesso!');
    }


}
