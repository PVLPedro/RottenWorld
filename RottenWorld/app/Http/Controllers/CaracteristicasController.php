<?php

namespace App\Http\Controllers;

use App\Models\Sheets;
// use App\Models\Caracteristicas;
use Illuminate\Http\Request;

class CaracteristicasController extends Controller
{
    public function edit(Request $request, Sheets $sheet)
    {
        $caracteristicas = $sheet->caracteristicas;

        // dd('cheguei no update', $request->all(), $sheet->caracteristicas);
        if (!$caracteristicas) {
            $caracteristicas = $sheet->caracteristicas()->create([
                'AFOR' => 0, 'ADES' => 0, 'ACON' => 0, 'AINT' => 0, 'APER' => 0, 'AVON' => 0,
                'PAMB' => 0, 'PAMF' => 0, 'PACR' => 0, 'PATL' => 0, 'PBRI' => 0, 'PESQ' => 0, 'PFUR' => 0,
                'PART' => 0, 'PCOC' => 0, 'PCOD' => 0, 'PEPL' => 0, 'PINV' => 0, 'PLAD' => 0, 'PPRS' => 0,
                'PCAC' => 0, 'PCIN' => 0, 'PCME' => 0, 'PCMA' => 0, 'PCMI' => 0, 'PCPO' => 0,
                'PBLE' => 0, 'PCRI' => 0, 'PDIP' => 0, 'PTIM' => 0, 'PTUI' => 0, 'PLID' => 0,
                'QARM' => 0, 'QBEL' => 0, 'QCOR' => 0, 'QCAS' => 0, 'QDDM' => 0, 'QBRX' => 0, 'QGEL' => 0, 'QGEN' => 0, 'QTRA' => 0, 'QSEA' => 0, 'QADA' => 0, 'QFDA' => 0, 'QJDP' => 0, 'QLAB' => 0, 'QMAL' => 0, 'QCNH' => 0, 'QMMF' => 0,
                'DANT' => 0, 'DAZA' => 0, 'DFEI' => 0, 'DPCR' => 0, 'DCOV' => 0, 'DCRE' => 0, 'DMDS' => 0, 'DPSI' => 0, 'DPSE' => 0, 'DPRE' => 0, 'DPRO' => 0, 'DTDA' => 0, 'DIRR' => 0, 'DSNO' => 0, 'DPLH' => 0, 'DVRU' => 0,
            ]);
        };

        return view('caracteristicas_edit', compact('sheet', 'caracteristicas'));
    }

    public function update(Request $request, Sheets $sheet)
    {
        $validated = $request->validate([
            'AFOR' => 'integer|min:0|max:6',
            'ADES' => 'integer|min:0|max:6',
            'ACON' => 'integer|min:0|max:6',
            'AINT' => 'integer|min:0|max:6',
            'APER' => 'integer|min:0|max:6',
            'AVON' => 'integer|min:0|max:6',

            'PAMB' => 'integer|min:0|max:6',
            'PAMF' => 'integer|min:0|max:6',
            'PACR' => 'integer|min:0|max:6',
            'PATL' => 'integer|min:0|max:6',
            'PBRI' => 'integer|min:0|max:6',
            'PESQ' => 'integer|min:0|max:6',
            'PFUR' => 'integer|min:0|max:6',

            'PART' => 'integer|min:0|max:6',
            'PCOC' => 'integer|min:0|max:6',
            'PCOD' => 'integer|min:0|max:6',
            'PEPL' => 'integer|min:0|max:6',
            'PINV' => 'integer|min:0|max:6',
            'PLAD' => 'integer|min:0|max:6',
            'PPRS' => 'integer|min:0|max:6',

            'PCAC' => 'integer|min:0|max:6',
            'PCIN' => 'integer|min:0|max:6',
            'PCME' => 'integer|min:0|max:6',
            'PCMA' => 'integer|min:0|max:6',
            'PCMI' => 'integer|min:0|max:6',
            'PCPO' => 'integer|min:0|max:6',

            'PBLE' => 'integer|min:0|max:6',
            'PCRI' => 'integer|min:0|max:6',
            'PDIP' => 'integer|min:0|max:6',
            'PTIM' => 'integer|min:0|max:6',
            'PTUI' => 'integer|min:0|max:6',
            'PLID' => 'integer|min:0|max:6',

            'QARM' => 'integer|min:0|max:5',
            'QBEL' => 'integer|min:0|max:5',
            'QCOR' => 'integer|min:0|max:5',

            'QCAS' => 'integer|min:0|max:3',
            'QDDM' => 'integer|min:0|max:3',
            'QBRX' => 'integer|min:0|max:3',
            
            'QGEL' => 'integer|min:0|max:4',
            
            'QGEN' => 'integer|min:0|max:3',
            'QTRA' => 'integer|min:0|max:3',
            'QSEA' => 'integer|min:0|max:3',
            
            'QADA' => 'integer|min:0|max:2',
            'QFDA' => 'integer|min:0|max:2',
            'QJDP' => 'integer|min:0|max:2',
            'QLAB' => 'integer|min:0|max:2',
            'QMAL' => 'integer|min:0|max:2',
            'QCNH' => 'integer|min:0|max:2',
            'QMMF' => 'integer|min:0|max:2',

            'DANT' => 'integer|min:0|max:5',
            'DAZA' => 'integer|min:0|max:5',
            'DFEI' => 'integer|min:0|max:5',
            'DPCR' => 'integer|min:0|max:5',

            'DCOV' => 'integer|min:0|max:3',
            'DCRE' => 'integer|min:0|max:3',
            'DMDS' => 'integer|min:0|max:3',
            'DPSI' => 'integer|min:0|max:3',
            
            'DPSE' => 'integer|min:0|max:3',
            'DPRE' => 'integer|min:0|max:3',
            'DPRO' => 'integer|min:0|max:3',
            'DTDA' => 'integer|min:0|max:3',
            
            'DIRR' => 'integer|min:0|max:2',
            'DSNO' => 'integer|min:0|max:2',
            'DPLH' => 'integer|min:0|max:2',
            'DVRU' => 'integer|min:0|max:2'
        ]);

        $caracteristicas = $sheet->caracteristicas()->firstOrCreate(
            ['sheet_id' => $sheet->id_sheet]
        );

        $caracteristicas->update($validated);

        return redirect()->route('sheets', $sheet)->with('success', 'Características atualizadas!');
        return redirect()->back();
    }
}