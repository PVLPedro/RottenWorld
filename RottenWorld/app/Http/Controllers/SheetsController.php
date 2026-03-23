<?php

namespace App\Http\Controllers;

use App\Models\Sheets;
use Illuminate\Http\Request;

class SheetsController extends Controller
{
    public function addSheet()
    {
        return view('new');
    }

    public function confirmAdd(Request $request)
    {
        $validated = $request->validate([
            'tipo' => 'required|integer|in:1,2,3',
            'nome' => 'required|string',
            'idade' => 'nullable|string',
            'aniversario' => 'nullable|string',
            'alcunha' => 'nullable|string',
            'profissao_atual' => 'nullable|string',
            'ex_profissoes' => 'nullable|string',
            'experiencias' => 'nullable|string',
            'hobbies' => 'nullable|string',
            'aparencia' => 'nullable|string',
            'resumo' => 'nullable|string',
            'historia' => 'nullable|string',
            'habilidade_um' => 'nullable|string',
            'habilidade_dois' => 'nullable|string',
        ]);

        Sheets::create($validated);

        return redirect()->route('sheets')->with('success', [
            'text' => 'Personagem',
            'name' => $request->nome,
            'action' => 'adicionado!'
        ]);
        return redirect()->back();
    }

    public function getDataHome(Sheets $sheet)
    {
        $sheets = Sheets::with('caracteristicas')->orderBy('nome', 'desc')->get();

        return view('home', compact('sheets'));
    }

    public function getDataSheets(?Sheets $sheet = null)
    {
        $sheets = Sheets::orderBy('nome', 'desc')->get();
        $selected = $sheet;

        return view('sheets', compact('sheets', 'selected'))->with('success', 'Sheets adicionado com sucesso!');
    }

    public function editSheet(Sheets $sheet)
    {
        $caracteristicas = $sheet->caracteristicas;
        return view('edit', compact('sheet', 'caracteristicas'));
    }

    public function confirmEdit(Request $request, Sheets $sheet)
    {
        $validated = $request->validate([
            'tipo' => 'required|integer|in:1,2,3',
            'nome' => 'required|string',
            'idade' => 'nullable|string',
            'aniversario' => 'nullable|string',
            'alcunha' => 'nullable|string',
            'profissao_atual' => 'nullable|string',
            'ex_profissoes' => 'nullable|string',
            'experiencias' => 'nullable|string',
            'hobbies' => 'nullable|string',
            'aparencia' => 'nullable|string',
            'resumo' => 'nullable|string',
            'historia' => 'nullable|string',
            'habilidade_um' => 'nullable|string',
            'habilidade_dois' => 'nullable|string',
        ]);

        $sheet->update($validated);

        return redirect()->route('sheets')->with('success', [
            'text' => 'Personagem',
            'name' => $sheet->nome,
            'action' => 'atualizado!'
        ]);
    }

    public function deleteSheet($id)
    {
        $Sheets = Sheets::findOrFail($id);
        $Sheets->delete();

        return redirect()->route('sheets')->with('success', [
            'text' => 'Personagem',
            'name' => $Sheets->nome,
            'action' => 'excluído!'
        ]);
    }
}