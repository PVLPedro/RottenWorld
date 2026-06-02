<?php

namespace App\Http\Controllers;

use App\Models\Sheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SheetController extends Controller
{
    public function index()
    {
        $sheets = Auth::user()
            ->sheets()
            ->orderBy('nome')
            ->get();

        return view('home', compact('sheets'), ['user' => Auth::user()]);
    }

    public function sheets(?Sheet $sheet = null)
    {
        $sheets = Auth::user()
            ->sheets()
            ->orderBy('nome')
            ->get();

        $selected = $sheet;

        return view('sheets', compact('sheets', 'selected'), ['user' => Auth::user()]);
    }

    public function create()
    {
        return view('new');
    }

    public function store(Request $request)
    {
        $validated =
            $request->validate([

                'tipo' => 'required|integer|in:1,2,3',

                'nome'            => 'required|string',
                'idade'           => 'nullable|string',
                'aniversario'     => 'nullable|string',
                'alcunha'         => 'nullable|string',
                'profissao_atual' => 'nullable|string',
                'ex_profissoes'   => 'nullable|string',
                'experiencias'    => 'nullable|string',
                'hobbies'         => 'nullable|string',
                'aparencia'       => 'nullable|string',
                'resumo'          => 'nullable|string',
                'historia'        => 'nullable|string',
                'habilidade_um'   => 'nullable|string',
                'habilidade_dois' => 'nullable|string',

                'AFOR' => 'integer|min:0|max:10',
                'ADES' => 'integer|min:0|max:10',
                'ACON' => 'integer|min:0|max:10',
                'AINT' => 'integer|min:0|max:10',
                'APER' => 'integer|min:0|max:10',
                'AVON' => 'integer|min:0|max:10',

                'PAMB' => 'integer|min:0|max:10',
                'PAMF' => 'integer|min:0|max:10',
                'PACR' => 'integer|min:0|max:10',
                'PATL' => 'integer|min:0|max:10',
                'PBRI' => 'integer|min:0|max:10',
                'PESQ' => 'integer|min:0|max:10',
                'PFUR' => 'integer|min:0|max:10',

                'PART' => 'integer|min:0|max:10',
                'PCOC' => 'integer|min:0|max:10',
                'PCOD' => 'integer|min:0|max:10',
                'PEPL' => 'integer|min:0|max:10',
                'PINV' => 'integer|min:0|max:10',
                'PLAD' => 'integer|min:0|max:10',
                'PPRS' => 'integer|min:0|max:10',

                'PCAC' => 'integer|min:0|max:10',
                'PCIN' => 'integer|min:0|max:10',
                'PCME' => 'integer|min:0|max:10',
                'PCMA' => 'integer|min:0|max:10',
                'PCMI' => 'integer|min:0|max:10',
                'PCPO' => 'integer|min:0|max:10',

                'PBLE' => 'integer|min:0|max:10',
                'PCRI' => 'integer|min:0|max:10',
                'PDIP' => 'integer|min:0|max:10',
                'PTIM' => 'integer|min:0|max:10',
                'PTUI' => 'integer|min:0|max:10',
                'PLID' => 'integer|min:0|max:10',

                'QARM' => 'integer|min:0|max:10',
                'QBEL' => 'integer|min:0|max:10',
                'QCOR' => 'integer|min:0|max:10',
                'QCAS' => 'integer|min:0|max:10',
                'QDDM' => 'integer|min:0|max:10',
                'QBRX' => 'integer|min:0|max:10',
                'QGEL' => 'integer|min:0|max:10',
                'QGEN' => 'integer|min:0|max:10',
                'QTRA' => 'integer|min:0|max:10',
                'QSEA' => 'integer|min:0|max:10',
                'QADA' => 'integer|min:0|max:10',
                'QFDA' => 'integer|min:0|max:10',
                'QJDP' => 'integer|min:0|max:10',
                'QLAB' => 'integer|min:0|max:10',
                'QMAL' => 'integer|min:0|max:10',
                'QCNH' => 'integer|min:0|max:10',
                'QMMF' => 'integer|min:0|max:10',

                'DANT' => 'integer|min:0|max:10',
                'DAZA' => 'integer|min:0|max:10',
                'DFEI' => 'integer|min:0|max:10',
                'DPCR' => 'integer|min:0|max:10',
                'DCOV' => 'integer|min:0|max:10',
                'DCRE' => 'integer|min:0|max:10',
                'DMDS' => 'integer|min:0|max:10',
                'DPSI' => 'integer|min:0|max:10',
                'DPSE' => 'integer|min:0|max:10',
                'DPRE' => 'integer|min:0|max:10',
                'DPRO' => 'integer|min:0|max:10',
                'DTDA' => 'integer|min:0|max:10',
                'DIRR' => 'integer|min:0|max:10',
                'DSNO' => 'integer|min:0|max:10',
                'DPLH' => 'integer|min:0|max:10',
                'DVRU' => 'integer|min:0|max:10',
        ]);

        Auth::user()
            ->sheets()
            ->create($validated);

        return redirect()
            ->route('sheets', ['user' => Auth::user()])
            ->with('success',[
                'text'=>'Personagem',
                'name'=>$request->nome,
                'action'=>'adicionado!'
            ]);
    }

    public function edit(Sheet $sheet)
    {
        abort_if($sheet->user_id !== Auth::id(), 403);

        return view('edit', compact('sheet'), ['user' => Auth::user()]);
    }

    public function editFeatures(Sheet $sheet)
    {
        abort_if($sheet->user_id !== Auth::id(), 403);

        return view('edit-features', compact('sheet'), ['user' => Auth::user()]);
    }

    public function update(Request $request, Sheet $sheet)
    {
        abort_if($sheet->user_id !== Auth::id(), 403);

        $validated =
            $request->validate([

                'tipo' => 'sometimes|required|integer|in:1,2,3',

                'nome'            => 'sometimes|required|string',
                'idade'           => 'sometimes|nullable|string',
                'aniversario'     => 'sometimes|nullable|string',
                'alcunha'         => 'sometimes|nullable|string',
                'profissao_atual' => 'sometimes|nullable|string',
                'ex_profissoes'   => 'sometimes|nullable|string',
                'experiencias'    => 'sometimes|nullable|string',
                'hobbies'         => 'sometimes|nullable|string',
                'aparencia'       => 'sometimes|nullable|string',
                'resumo'          => 'sometimes|nullable|string',
                'historia'        => 'sometimes|nullable|string',
                'habilidade_um'   => 'sometimes|nullable|string',
                'habilidade_dois' => 'sometimes|nullable|string',

                'AFOR' => 'sometimes|integer|min:0|max:10',
                'ADES' => 'sometimes|integer|min:0|max:10',
                'ACON' => 'sometimes|integer|min:0|max:10',
                'AINT' => 'sometimes|integer|min:0|max:10',
                'APER' => 'sometimes|integer|min:0|max:10',
                'AVON' => 'sometimes|integer|min:0|max:10',

                'PAMB' => 'sometimes|integer|min:0|max:10',
                'PAMF' => 'sometimes|integer|min:0|max:10',
                'PACR' => 'sometimes|integer|min:0|max:10',
                'PATL' => 'sometimes|integer|min:0|max:10',
                'PBRI' => 'sometimes|integer|min:0|max:10',
                'PESQ' => 'sometimes|integer|min:0|max:10',
                'PFUR' => 'sometimes|integer|min:0|max:10',

                'PART' => 'sometimes|integer|min:0|max:10',
                'PCOC' => 'sometimes|integer|min:0|max:10',
                'PCOD' => 'sometimes|integer|min:0|max:10',
                'PEPL' => 'sometimes|integer|min:0|max:10',
                'PINV' => 'sometimes|integer|min:0|max:10',
                'PLAD' => 'sometimes|integer|min:0|max:10',
                'PPRS' => 'sometimes|integer|min:0|max:10',

                'PCAC' => 'sometimes|integer|min:0|max:10',
                'PCIN' => 'sometimes|integer|min:0|max:10',
                'PCME' => 'sometimes|integer|min:0|max:10',
                'PCMA' => 'sometimes|integer|min:0|max:10',
                'PCMI' => 'sometimes|integer|min:0|max:10',
                'PCPO' => 'sometimes|integer|min:0|max:10',

                'PBLE' => 'sometimes|integer|min:0|max:10',
                'PCRI' => 'sometimes|integer|min:0|max:10',
                'PDIP' => 'sometimes|integer|min:0|max:10',
                'PTIM' => 'sometimes|integer|min:0|max:10',
                'PTUI' => 'sometimes|integer|min:0|max:10',
                'PLID' => 'sometimes|integer|min:0|max:10',

                'QARM' => 'sometimes|integer|min:0|max:10',
                'QBEL' => 'sometimes|integer|min:0|max:10',
                'QCOR' => 'sometimes|integer|min:0|max:10',
                'QCAS' => 'sometimes|integer|min:0|max:10',
                'QDDM' => 'sometimes|integer|min:0|max:10',
                'QBRX' => 'sometimes|integer|min:0|max:10',
                'QGEL' => 'sometimes|integer|min:0|max:10',
                'QGEN' => 'sometimes|integer|min:0|max:10',
                'QTRA' => 'sometimes|integer|min:0|max:10',
                'QSEA' => 'sometimes|integer|min:0|max:10',
                'QADA' => 'sometimes|integer|min:0|max:10',
                'QFDA' => 'sometimes|integer|min:0|max:10',
                'QJDP' => 'sometimes|integer|min:0|max:10',
                'QLAB' => 'sometimes|integer|min:0|max:10',
                'QMAL' => 'sometimes|integer|min:0|max:10',
                'QCNH' => 'sometimes|integer|min:0|max:10',
                'QMMF' => 'sometimes|integer|min:0|max:10',

                'DANT' => 'sometimes|integer|min:0|max:10',
                'DAZA' => 'sometimes|integer|min:0|max:10',
                'DFEI' => 'sometimes|integer|min:0|max:10',
                'DPCR' => 'sometimes|integer|min:0|max:10',
                'DCOV' => 'sometimes|integer|min:0|max:10',
                'DCRE' => 'sometimes|integer|min:0|max:10',
                'DMDS' => 'sometimes|integer|min:0|max:10',
                'DPSI' => 'sometimes|integer|min:0|max:10',
                'DPSE' => 'sometimes|integer|min:0|max:10',
                'DPRE' => 'sometimes|integer|min:0|max:10',
                'DPRO' => 'sometimes|integer|min:0|max:10',
                'DTDA' => 'sometimes|integer|min:0|max:10',
                'DIRR' => 'sometimes|integer|min:0|max:10',
                'DSNO' => 'sometimes|integer|min:0|max:10',
                'DPLH' => 'sometimes|integer|min:0|max:10',
                'DVRU' => 'sometimes|integer|min:0|max:10',
        ]);

        $sheet->update($validated);

        return redirect()
            ->route('sheet.show', $sheet, ['user' => Auth::user()])
            ->with('success', [
                'text' => 'Personagem',
                'name' => $sheet->nome,
                'action' => 'atualizado!'
            ]);
    }

    public function destroy(Sheet $sheet)
    {
        abort_if($sheet->user_id !== Auth::id(), 403);

        $sheet->delete();

        return redirect()
            ->route('sheets', ['user' => Auth::user()]);
    }
}