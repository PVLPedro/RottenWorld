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
            'nome' => 'required|string',
            'idade' => 'required|string',
            'aniversario' => 'required|string',
            'alcunha' => 'string',
            'profissao_atual' => 'required|string',
            'ex_profissoes' => 'required|string',
            'experiencias' => 'required|string',
            'hobbies' => 'required|string',
            'aparencia' => 'required|string',
            'resumo' => 'required|string',
            'historia' => 'required|string'
        ]);

        Sheets::create($validated);

        return redirect()->route('home')->with('success', 'Sheets adicionado com sucesso!');
        return redirect()->back();
    }

    public function getDataHome(Sheets $sheet)
    {
        $sheets = Sheets::with('caracteristicas')
            ->orderBy('nome', 'desc')
            ->get();

        return view('home', compact('sheets'));
    }

    public function getDataSheets(?Sheets $sheet = null)
    {
        $sheets = Sheets::orderBy('nome', 'asc')->get();
        $selected = $sheet;

        return view('sheets', compact('sheets', 'selected'));
    }

    public function editSheet(Sheets $sheet)
    {
        $caracteristicas = $sheet->caracteristicas;
        return view('edit', compact('sheet', 'caracteristicas'));
    }

    public function confirmEdit(Request $request, Sheets $sheet)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'idade' => 'required|string',
            'aniversario' => 'required|string',
            'alcunha' => 'nullable|string',
            'profissao_atual' => 'required|string',
            'ex_profissoes' => 'required|string',
            'experiencias' => 'required|string',
            'hobbies' => 'required|string',
            'aparencia' => 'required|string',
            'resumo' => 'required|string',
            'historia' => 'required|string'
        ]);

        $sheet->update($validated);

        return redirect()->route('sheets')->with('success', 'Sheets atualizado com sucesso!');
    }

    public function deleteSheet($id)
    {
        $Sheets = Sheets::findOrFail($id);
        $Sheets->delete();

        return redirect()->route('home')->with('success', 'Sheets excluído com sucesso!');
    }
}