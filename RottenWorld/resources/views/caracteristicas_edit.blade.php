@extends('layouts.app')

@section('content')
    <main id="main-form" class="relative bg-bg-secondary min-h-[calc(100dvh-120px)] p-4 flex justify-center items-center gap-4">
        <form class=" relative bg-bg-primary flex-1 max-h-[calc(100dvh-160px)] max-w-250 rounded-lg p-4 overflow-y-auto [&_h1]:text-2xl [&_h2]:text-xl [&_h3]:text-lg [&_h1,h2]:font-bold [&_h1,h2]:text-center [&_h3]:px-2 flex flex-col gap-4"
            method="POST" action="{{ route('caracteristicas.update', $sheet) }}">
            @csrf
            @method('PUT')
            <a href="{{ url()->previous() }}" class="absolute top-4 left-4 bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2 rounded-lg flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
                <span>Voltar</span>
            </a>
            <h1 class="mb-6">Edição de Características</h1>
            <hr class="border border-bg-tertiary mb-6">
            <h2>Atributos</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Força</h3>
                    <select name="AFOR" id="AFOR" value="{{ old('AFOR', $caracteristicas->AFOR) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Destreza</h3>
                    <select name="ADES" id="ADES" value="{{ old('ADES', $caracteristicas->ADES) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Constituição</h3>
                    <select name="ACON" id="ACON" value="{{ old('ACON', $caracteristicas->ACON) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Inteligência</h3>
                    <select name="AINT" id="AINT" value="{{ old('AINT', $caracteristicas->AINT) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Percepção</h3>
                    <select name="APER" id="APER" value="{{ old('APER', $caracteristicas->APER) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Força de Vontade</h3>
                    <select name="AVON" id="AVON" value="{{ old('AVON', $caracteristicas->AVON) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Perícias (Físicas)</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Armas Brancas</h3>
                    <select name="PAMB" id="PAMB" value="{{ old('PAMB', $caracteristicas->PAMB) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Armas de Fogo</h3>
                    <select name="PAMF" id="PAMF" value="{{ old('PAMF', $caracteristicas->PAMF) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Acrobacia</h3>
                    <select name="PACR" id="PACR" value="{{ old('PACR', $caracteristicas->PACR) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Atletismo</h3>
                    <select name="PATL" id="PATL" value="{{ old('PATL', $caracteristicas->PATL) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Briga</h3>
                    <select name="PBRI" id="PBRI" value="{{ old('PBRI', $caracteristicas->PBRI) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Esquiva</h3>
                    <select name="PESQ" id="PESQ" value="{{ old('PESQ', $caracteristicas->PESQ) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="relative flex justify-center gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4 max-w-1/2">
                    <h3>Furtividade</h3>
                    <select name="PFUR" id="PFUR" value="{{ old('PFUR', $caracteristicas->PFUR) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Perícias (Técnicas)</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Artesanato</h3>
                    <select name="PART" id="PART" value="{{ old('PART', $caracteristicas->PART) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Concentração</h3>
                    <select name="PCOC" id="PCOC" value="{{ old('PCOC', $caracteristicas->PCOC) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Condução</h3>
                    <select name="PCOD" id="PCOD" value="{{ old('PCOD', $caracteristicas->PCOD) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Exploração</h3>
                    <select name="PEPL" id="PEPL" value="{{ old('PEPL', $caracteristicas->PEPL) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Investigação</h3>
                    <select name="PINV" id="PINV" value="{{ old('PINV', $caracteristicas->PINV) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Ladinagem</h3>
                    <select name="PLAD" id="PLAD" value="{{ old('PLAD', $caracteristicas->PLAD) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="relative flex justify-center gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4 max-w-1/2">
                    <h3>Primeiros Socorros</h3>
                    <select name="PPRS" id="PPRS" value="{{ old('PPRS', $caracteristicas->PPRS) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Perícias (Intelectuais)</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Conhec. Acadêmico</h3>
                    <select name="PCAC" id="PCAC" value="{{ old('PCAC', $caracteristicas->PCAC) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Conhec. Informático</h3>
                    <select name="PCIN" id="PCIN" value="{{ old('PCIN', $caracteristicas->PCIN) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Conhec. Médico</h3>
                    <select name="PCME" id="PCME" value="{{ old('PCME', $caracteristicas->PCME) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Conhec. Mental</h3>
                    <select name="PCMA" id="PCMA" value="{{ old('PCMA', $caracteristicas->PCMA) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Conhec. Militar</h3>
                    <select name="PCMI" id="PCMI" value="{{ old('PCMI', $caracteristicas->PCMI) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Conhec. Popular</h3>
                    <select name="PCPO" id="PCPO" value="{{ old('PCPO', $caracteristicas->PCPO) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Perícias (Sociais)</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Blefe</h3>
                    <select name="PBLE" id="PBLE" value="{{ old('PBLE', $caracteristicas->PBLE) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Carisma</h3>
                    <select name="PCRI" id="PCRI" value="{{ old('PCRI', $caracteristicas->PCRI) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Diplomacia</h3>
                    <select name="PDIP" id="PDIP" value="{{ old('PDIP', $caracteristicas->PDIP) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Intimidação</h3>
                    <select name="PTIM" id="PTIM" value="{{ old('PTIM', $caracteristicas->PTIM) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Intuição</h3>
                    <select name="PTUI" id="PTUI" value="{{ old('PTUI', $caracteristicas->PTUI) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Liderança</h3>
                    <select name="PLID" id="PLID" value="{{ old('PLID', $caracteristicas->PLID) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Nível 0</option>
                        <option value="1">Nível 1</option>
                        <option value="2">Nível 2</option>
                        <option value="3">Nível 3</option>
                        <option value="4">Nível 4</option>
                        <option value="5">Nível 5</option>
                        <option value="6">Nível 6</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Qualidades</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Artes Marciais</h3>
                    <select name="QARM" id="QARM" value="{{ old('QARM', $caracteristicas->QARM) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                        <option value="4">Valor 4</option>
                        <option value="5">Valor 5</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Beleza</h3>
                    <select name="QBEL" id="QBEL" value="{{ old('QBEL', $caracteristicas->QBEL) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                        <option value="4">Valor 4</option>
                        <option value="5">Valor 5</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Corajoso</h3>
                    <select name="QCOR" id="QCOR" value="{{ old('QCOR', $caracteristicas->QCOR) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                        <option value="4">Valor 4</option>
                        <option value="5">Valor 5</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Casos Criminais</h3>
                    <select name="QCAS" id="QCAS" value="{{ old('QCAS', $caracteristicas->QCAS) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Duro de Matar</h3>
                    <select name="QDDM" id="QDDM" value="{{ old('QDDM', $caracteristicas->QDDM) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Bom Reflexo</h3>
                    <select name="QBRX" id="QBRX" value="{{ old('QBRX', $caracteristicas->QBRX) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Genialidade</h3>
                    <select name="QGEL" id="QGEL" value="{{ old('QGEL', $caracteristicas->QGEL) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="3">Valor 4</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Genética Boa</h3>
                    <select name="QGEN" id="QGEN" value="{{ old('QGEN', $caracteristicas->QGEN) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Tranquilidade</h3>
                    <select name="QTRA" id="QTRA" value="{{ old('QTRA', $caracteristicas->QTRA) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Sentido Aguçado</h3>
                    <select name="QSEA" id="QSEA" value="{{ old('QSEA', $caracteristicas->QSEA) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Adaptabilidade</h3>
                    <select name="QADA" id="QADA" value="{{ old('QADA', $caracteristicas->QADA) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Filmes de Ação</h3>
                    <select name="QFDA" id="QFDA" value="{{ old('QFDA', $caracteristicas->QFDA) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Jogador de Poker</h3>
                    <select name="QJDP" id="QJDP" value="{{ old('QJDP', $caracteristicas->QJDP) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Lábia</h3>
                    <select name="QLAB" id="QLAB" value="{{ old('QLAB', $caracteristicas->QLAB) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Malandragem</h3>
                    <select name="QMAL" id="QMAL" value="{{ old('QMAL', $caracteristicas->QMAL) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Carteira de Motorista</h3>
                    <select name="QCNH" id="QCNH" value="{{ old('QCNH', $caracteristicas->QCNH) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
            </section>
            <section class="relative flex justify-center gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4 max-w-1/2">
                    <h3>Memória Fotográfica</h3>
                    <select name="QMMF" id="QMMF" value="{{ old('QMMF', $caracteristicas->QMMF) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Defeitos</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Antipatia</h3>
                    <select name="DANT" id="DANT" value="{{ old('DANT', $caracteristicas->DANT) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                        <option value="4">Valor 4</option>
                        <option value="5">Valor 5</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Azarado</h3>
                    <select name="DAZA" id="DAZA" value="{{ old('DAZA', $caracteristicas->DAZA) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                        <option value="4">Valor 4</option>
                        <option value="5">Valor 5</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Feiura</h3>
                    <select name="DFEI" id="DFEI" value="{{ old('DFEI', $caracteristicas->DFEI) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                        <option value="4">Valor 4</option>
                        <option value="5">Valor 5</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Problemas Crônicos</h3>
                    <select name="DPCR" id="DPCR" value="{{ old('DPCR', $caracteristicas->DPCR) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                        <option value="4">Valor 4</option>
                        <option value="5">Valor 5</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Covarde</h3>
                    <select name="DCOV" id="DCOV" value="{{ old('DCOV', $caracteristicas->DCOV) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Crenças Estranhas</h3>
                    <select name="DCRE" id="DCRE" value="{{ old('DCRE', $caracteristicas->DCRE) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Medo de Sangue</h3>
                    <select name="DMDS" id="DMDS" value="{{ old('DMDS', $caracteristicas->DMDS) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Problemas Psicológicos</h3>
                    <select name="DPSI" id="DPSI" value="{{ old('DPSI', $caracteristicas->DPSI) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="1">Valor 1</option>
                        <option value="2">Valor 2</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Pesadelos Frequentes</h3>
                    <select name="DPSE" id="DPSE" value="{{ old('DPSE', $caracteristicas->DPSE) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Preguiçoso</h3>
                    <select name="DPRE" id="DPRE" value="{{ old('DPRE', $caracteristicas->DPRE) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Procastinador</h3>
                    <select name="DPRO" id="DPRO" value="{{ old('DPRO', $caracteristicas->DPRO) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>TDAH</h3>
                    <select name="DTDA" id="DTDA" value="{{ old('DTDA', $caracteristicas->DTDA) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="3">Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Irresponsável</h3>
                    <select name="DIRR" id="DIRR" value="{{ old('DIRR', $caracteristicas->DIRR) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Palhaço</h3>
                    <select name="DPLH" id="DPLH" value="{{ old('DPLH', $caracteristicas->DPLH) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>Sem Noção</h3>
                    <select name="DSNO" id="DSNO" value="{{ old('DSNO', $caracteristicas->DSNO) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>Visão Ruim</h3>
                    <select name="DVRU" id="DVRU" value="{{ old('DVRU', $caracteristicas->DVRU) }}"
                        class="w-50 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0">Valor 0</option>
                        <option value="2">Valor 2</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary mt-6 mb-8">
            <section class="flex gap-4 *:flex-1 *:p-2 *:rounded-lg *:cursor-pointer *:flex *:gap-4 *:justify-center">
                <button type="reset" class="bg-attention hover:bg-attention-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-broom-icon lucide-broom"><path d="m13 11 9-9"/><path d="M14.6 12.6c.8.8.9 2.1.2 3L10 22l-8-8 6.4-4.8c.9-.7 2.2-.6 3 .2Z"/><path d="m6.8 10.4 6.8 6.8"/><path d="m5 17 1.4-1.4"/></svg>
                    Formatar
                </button>
                <button type="submit" class="bg-bg-tertiary hover:bg-bg-tertiary-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send-icon lucide-send"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"/><path d="m21.854 2.147-10.94 10.939"/></svg>
                    Salvar
                </button>
            </section>
        </form>
    </main>
@endsection