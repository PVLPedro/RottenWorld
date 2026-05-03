@extends('layouts.app')

@section('content')
    <main id="main-form" class="relative bg-bg-secondary min-h-[calc(100dvh-120px)] p-4 flex justify-center items-center gap-4">
        <form class="relative bg-bg-primary flex-1 max-h-[calc(100dvh-160px)] max-w-250 rounded-lg p-4 overflow-y-auto [&_h1]:text-2xl [&_h2]:text-xl [&_h3]:text-lg [&_h1,h2]:font-bold [&_h1,h2]:text-center [&_h3]:px-2 flex flex-col gap-4 **:[h3]:flex **:[h3]:items-center **:[h3]:gap-4 **:[svg]:size-6"
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
                    <h3>
                        <x-lucide-biceps-flexed />
                        Força
                    </h3>
                    <select name="AFOR" id="AFOR"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('AFOR', $caracteristicas->AFOR) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('AFOR', $caracteristicas->AFOR) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('AFOR', $caracteristicas->AFOR) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('AFOR', $caracteristicas->AFOR) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('AFOR', $caracteristicas->AFOR) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('AFOR', $caracteristicas->AFOR) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('AFOR', $caracteristicas->AFOR) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('AFOR', $caracteristicas->AFOR) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('AFOR', $caracteristicas->AFOR) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-sport-shoe />
                        Destreza
                    </h3>
                    <select name="ADES" id="ADES"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('ADES', $caracteristicas->ADES) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('ADES', $caracteristicas->ADES) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('ADES', $caracteristicas->ADES) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('ADES', $caracteristicas->ADES) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('ADES', $caracteristicas->ADES) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('ADES', $caracteristicas->ADES) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('ADES', $caracteristicas->ADES) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('ADES', $caracteristicas->ADES) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('ADES', $caracteristicas->ADES) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-cross />
                        Constituição
                    </h3>
                    <select name="ACON" id="ACON"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('ACON', $caracteristicas->ACON) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('ACON', $caracteristicas->ACON) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('ACON', $caracteristicas->ACON) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('ACON', $caracteristicas->ACON) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('ACON', $caracteristicas->ACON) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('ACON', $caracteristicas->ACON) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('ACON', $caracteristicas->ACON) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('ACON', $caracteristicas->ACON) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('ACON', $caracteristicas->ACON) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-brain-circuit />
                        Inteligência
                    </h3>
                    <select name="AINT" id="AINT"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('AINT', $caracteristicas->AINT) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('AINT', $caracteristicas->AINT) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('AINT', $caracteristicas->AINT) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('AINT', $caracteristicas->AINT) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('AINT', $caracteristicas->AINT) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('AINT', $caracteristicas->AINT) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('AINT', $caracteristicas->AINT) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('AINT', $caracteristicas->AINT) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('AINT', $caracteristicas->AINT) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-scan-eye />
                        Percepção
                    </h3>
                    <select name="APER" id="APER"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('APER', $caracteristicas->APER) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('APER', $caracteristicas->APER) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('APER', $caracteristicas->APER) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('APER', $caracteristicas->APER) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('APER', $caracteristicas->APER) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('APER', $caracteristicas->APER) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('APER', $caracteristicas->APER) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('APER', $caracteristicas->APER) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('APER', $caracteristicas->APER) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-flame />
                        Força de Vontade
                    </h3>
                    <select name="AVON" id="AVON"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('AVON', $caracteristicas->AVON) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('AVON', $caracteristicas->AVON) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('AVON', $caracteristicas->AVON) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('AVON', $caracteristicas->AVON) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('AVON', $caracteristicas->AVON) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('AVON', $caracteristicas->AVON) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('AVON', $caracteristicas->AVON) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('AVON', $caracteristicas->AVON) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('AVON', $caracteristicas->AVON) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Perícias (Físicas)</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-axe />
                        Armas Brancas
                    </h3>
                    <select name="PAMB" id="PAMB"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PAMB', $caracteristicas->PAMB) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PAMB', $caracteristicas->PAMB) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PAMB', $caracteristicas->PAMB) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PAMB', $caracteristicas->PAMB) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PAMB', $caracteristicas->PAMB) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PAMB', $caracteristicas->PAMB) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PAMB', $caracteristicas->PAMB) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PAMB', $caracteristicas->PAMB) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PAMB', $caracteristicas->PAMB) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-bow-arrow />
                        Armas de Fogo
                    </h3>
                    <select name="PAMF" id="PAMF"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PAMF', $caracteristicas->PAMF) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PAMF', $caracteristicas->PAMF) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PAMF', $caracteristicas->PAMF) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PAMF', $caracteristicas->PAMF) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PAMF', $caracteristicas->PAMF) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PAMF', $caracteristicas->PAMF) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PAMF', $caracteristicas->PAMF) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PAMF', $caracteristicas->PAMF) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PAMF', $caracteristicas->PAMF) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-circle-star />
                        Acrobacia
                    </h3>
                    <select name="PACR" id="PACR"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PACR', $caracteristicas->PACR) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PACR', $caracteristicas->PACR) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PACR', $caracteristicas->PACR) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PACR', $caracteristicas->PACR) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PACR', $caracteristicas->PACR) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PACR', $caracteristicas->PACR) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PACR', $caracteristicas->PACR) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PACR', $caracteristicas->PACR) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PACR', $caracteristicas->PACR) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-medal />
                        Atletismo
                    </h3>
                    <select name="PATL" id="PATL"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PATL', $caracteristicas->PATL) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PATL', $caracteristicas->PATL) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PATL', $caracteristicas->PATL) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PATL', $caracteristicas->PATL) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PATL', $caracteristicas->PATL) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PATL', $caracteristicas->PATL) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PATL', $caracteristicas->PATL) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PATL', $caracteristicas->PATL) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PATL', $caracteristicas->PATL) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-hand-fist />
                        Briga
                    </h3>
                    <select name="PBRI" id="PBRI"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PBRI', $caracteristicas->PBRI) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PBRI', $caracteristicas->PBRI) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PBRI', $caracteristicas->PBRI) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PBRI', $caracteristicas->PBRI) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PBRI', $caracteristicas->PBRI) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PBRI', $caracteristicas->PBRI) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PBRI', $caracteristicas->PBRI) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PBRI', $caracteristicas->PBRI) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PBRI', $caracteristicas->PBRI) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-arrow-big-right-dash />
                        Esquiva
                    </h3>
                    <select name="PESQ" id="PESQ"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PESQ', $caracteristicas->PESQ) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PESQ', $caracteristicas->PESQ) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PESQ', $caracteristicas->PESQ) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PESQ', $caracteristicas->PESQ) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PESQ', $caracteristicas->PESQ) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PESQ', $caracteristicas->PESQ) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PESQ', $caracteristicas->PESQ) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PESQ', $caracteristicas->PESQ) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PESQ', $caracteristicas->PESQ) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="relative flex justify-center gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4 max-w-1/2">
                    <h3>
                        <x-lucide-ear-off />
                        Furtividade
                    </h3>
                    <select name="PFUR" id="PFUR"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PFUR', $caracteristicas->PFUR) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PFUR', $caracteristicas->PFUR) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PFUR', $caracteristicas->PFUR) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PFUR', $caracteristicas->PFUR) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PFUR', $caracteristicas->PFUR) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PFUR', $caracteristicas->PFUR) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PFUR', $caracteristicas->PFUR) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PFUR', $caracteristicas->PFUR) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PFUR', $caracteristicas->PFUR) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Perícias (Técnicas)</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-hammer />
                        Artesanato
                    </h3>
                    <select name="PART" id="PART"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PART', $caracteristicas->PART) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PART', $caracteristicas->PART) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PART', $caracteristicas->PART) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PART', $caracteristicas->PART) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PART', $caracteristicas->PART) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PART', $caracteristicas->PART) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PART', $caracteristicas->PART) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PART', $caracteristicas->PART) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PART', $caracteristicas->PART) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-waves-horizontal />
                        Concentração
                    </h3>
                    <select name="PCOC" id="PCOC"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCOC', $caracteristicas->PCOC) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCOC', $caracteristicas->PCOC) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCOC', $caracteristicas->PCOC) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCOC', $caracteristicas->PCOC) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCOC', $caracteristicas->PCOC) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCOC', $caracteristicas->PCOC) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCOC', $caracteristicas->PCOC) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCOC', $caracteristicas->PCOC) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCOC', $caracteristicas->PCOC) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-car />
                        Condução
                    </h3>
                    <select name="PCOD" id="PCOD"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCOD', $caracteristicas->PCOD) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCOD', $caracteristicas->PCOD) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCOD', $caracteristicas->PCOD) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCOD', $caracteristicas->PCOD) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCOD', $caracteristicas->PCOD) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCOD', $caracteristicas->PCOD) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCOD', $caracteristicas->PCOD) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCOD', $caracteristicas->PCOD) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCOD', $caracteristicas->PCOD) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-tree-palm />
                        Exploração
                    </h3>
                    <select name="PEPL" id="PEPL"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PEPL', $caracteristicas->PEPL) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PEPL', $caracteristicas->PEPL) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PEPL', $caracteristicas->PEPL) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PEPL', $caracteristicas->PEPL) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PEPL', $caracteristicas->PEPL) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PEPL', $caracteristicas->PEPL) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PEPL', $caracteristicas->PEPL) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PEPL', $caracteristicas->PEPL) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PEPL', $caracteristicas->PEPL) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-search />
                        Investigação
                    </h3>
                    <select name="PINV" id="PINV"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PINV', $caracteristicas->PINV) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PINV', $caracteristicas->PINV) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PINV', $caracteristicas->PINV) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PINV', $caracteristicas->PINV) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PINV', $caracteristicas->PINV) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PINV', $caracteristicas->PINV) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PINV', $caracteristicas->PINV) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PINV', $caracteristicas->PINV) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PINV', $caracteristicas->PINV) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-piggy-bank />
                        Ladinagem
                    </h3>
                    <select name="PLAD" id="PLAD"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PLAD', $caracteristicas->PLAD) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PLAD', $caracteristicas->PLAD) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PLAD', $caracteristicas->PLAD) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PLAD', $caracteristicas->PLAD) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PLAD', $caracteristicas->PLAD) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PLAD', $caracteristicas->PLAD) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PLAD', $caracteristicas->PLAD) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PLAD', $caracteristicas->PLAD) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PLAD', $caracteristicas->PLAD) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="relative flex justify-center gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4 max-w-1/2">
                    <h3>
                        <x-lucide-briefcase-medical />
                        Primeiros Socorros
                    </h3>
                    <select name="PPRS" id="PPRS"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PPRS', $caracteristicas->PPRS) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PPRS', $caracteristicas->PPRS) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PPRS', $caracteristicas->PPRS) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PPRS', $caracteristicas->PPRS) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PPRS', $caracteristicas->PPRS) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PPRS', $caracteristicas->PPRS) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PPRS', $caracteristicas->PPRS) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PPRS', $caracteristicas->PPRS) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PPRS', $caracteristicas->PPRS) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Perícias (Intelectuais)</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-graduation-cap />
                        Conhec. Acadêmico
                    </h3>
                    <select name="PCAC" id="PCAC"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCAC', $caracteristicas->PCAC) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCAC', $caracteristicas->PCAC) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCAC', $caracteristicas->PCAC) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCAC', $caracteristicas->PCAC) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCAC', $caracteristicas->PCAC) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCAC', $caracteristicas->PCAC) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCAC', $caracteristicas->PCAC) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCAC', $caracteristicas->PCAC) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCAC', $caracteristicas->PCAC) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-cpu />
                        Conhec. Informático
                    </h3>
                    <select name="PCIN" id="PCIN"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCIN', $caracteristicas->PCIN) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCIN', $caracteristicas->PCIN) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCIN', $caracteristicas->PCIN) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCIN', $caracteristicas->PCIN) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCIN', $caracteristicas->PCIN) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCIN', $caracteristicas->PCIN) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCIN', $caracteristicas->PCIN) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCIN', $caracteristicas->PCIN) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCIN', $caracteristicas->PCIN) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-hospital />
                        Conhec. Médico
                    </h3>
                    <select name="PCME" id="PCME"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCME', $caracteristicas->PCME) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCME', $caracteristicas->PCME) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCME', $caracteristicas->PCME) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCME', $caracteristicas->PCME) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCME', $caracteristicas->PCME) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCME', $caracteristicas->PCME) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCME', $caracteristicas->PCME) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCME', $caracteristicas->PCME) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCME', $caracteristicas->PCME) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-stethoscope />
                        Conhec. Mental</h3>
                    <select name="PCMA" id="PCMA"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCMA', $caracteristicas->PCMA) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCMA', $caracteristicas->PCMA) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCMA', $caracteristicas->PCMA) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCMA', $caracteristicas->PCMA) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCMA', $caracteristicas->PCMA) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCMA', $caracteristicas->PCMA) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCMA', $caracteristicas->PCMA) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCMA', $caracteristicas->PCMA) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCMA', $caracteristicas->PCMA) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-shield-half />
                        Conhec. Militar
                    </h3>
                    <select name="PCMI" id="PCMI"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCMI', $caracteristicas->PCMI) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCMI', $caracteristicas->PCMI) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCMI', $caracteristicas->PCMI) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCMI', $caracteristicas->PCMI) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCMI', $caracteristicas->PCMI) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCMI', $caracteristicas->PCMI) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCMI', $caracteristicas->PCMI) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCMI', $caracteristicas->PCMI) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCMI', $caracteristicas->PCMI) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-users />
                        Conhec. Popular
                    </h3>
                    <select name="PCPO" id="PCPO"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCPO', $caracteristicas->PCPO) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCPO', $caracteristicas->PCPO) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCPO', $caracteristicas->PCPO) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCPO', $caracteristicas->PCPO) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCPO', $caracteristicas->PCPO) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCPO', $caracteristicas->PCPO) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCPO', $caracteristicas->PCPO) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCPO', $caracteristicas->PCPO) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCPO', $caracteristicas->PCPO) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Perícias (Sociais)</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-hat-glasses />
                        Blefe
                    </h3>
                    <select name="PBLE" id="PBLE"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PBLE', $caracteristicas->PBLE) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PBLE', $caracteristicas->PBLE) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PBLE', $caracteristicas->PBLE) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PBLE', $caracteristicas->PBLE) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PBLE', $caracteristicas->PBLE) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PBLE', $caracteristicas->PBLE) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PBLE', $caracteristicas->PBLE) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PBLE', $caracteristicas->PBLE) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PBLE', $caracteristicas->PBLE) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-smile />
                        Carisma
                    </h3>
                    <select name="PCRI" id="PCRI"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PCRI', $caracteristicas->PCRI) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PCRI', $caracteristicas->PCRI) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PCRI', $caracteristicas->PCRI) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PCRI', $caracteristicas->PCRI) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PCRI', $caracteristicas->PCRI) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PCRI', $caracteristicas->PCRI) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PCRI', $caracteristicas->PCRI) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PCRI', $caracteristicas->PCRI) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PCRI', $caracteristicas->PCRI) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-handshake />
                        Diplomacia
                    </h3>
                    <select name="PDIP" id="PDIP"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PDIP', $caracteristicas->PDIP) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PDIP', $caracteristicas->PDIP) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PDIP', $caracteristicas->PDIP) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PDIP', $caracteristicas->PDIP) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PDIP', $caracteristicas->PDIP) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PDIP', $caracteristicas->PDIP) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PDIP', $caracteristicas->PDIP) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PDIP', $caracteristicas->PDIP) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PDIP', $caracteristicas->PDIP) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-angry />
                        Intimidação
                    </h3>
                    <select name="PTIM" id="PTIM"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PTIM', $caracteristicas->PTIM) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PTIM', $caracteristicas->PTIM) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PTIM', $caracteristicas->PTIM) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PTIM', $caracteristicas->PTIM) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PTIM', $caracteristicas->PTIM) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PTIM', $caracteristicas->PTIM) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PTIM', $caracteristicas->PTIM) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PTIM', $caracteristicas->PTIM) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PTIM', $caracteristicas->PTIM) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-bell />
                        Intuição
                    </h3>
                    <select name="PTUI" id="PTUI"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PTUI', $caracteristicas->PTUI) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PTUI', $caracteristicas->PTUI) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PTUI', $caracteristicas->PTUI) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PTUI', $caracteristicas->PTUI) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PTUI', $caracteristicas->PTUI) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PTUI', $caracteristicas->PTUI) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PTUI', $caracteristicas->PTUI) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PTUI', $caracteristicas->PTUI) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PTUI', $caracteristicas->PTUI) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-crown />
                        Liderança
                    </h3>
                    <select name="PLID" id="PLID"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('PLID', $caracteristicas->PLID) == 0 ? 'selected' : '' }}>Nível 0</option>
                        <option value="1" {{ old('PLID', $caracteristicas->PLID) == 1 ? 'selected' : '' }}>Nível 1</option>
                        <option value="2" {{ old('PLID', $caracteristicas->PLID) == 2 ? 'selected' : '' }}>Nível 2</option>
                        <option value="3" {{ old('PLID', $caracteristicas->PLID) == 3 ? 'selected' : '' }}>Nível 3</option>
                        <option value="4" {{ old('PLID', $caracteristicas->PLID) == 4 ? 'selected' : '' }}>Nível 4</option>
                        <option value="5" {{ old('PLID', $caracteristicas->PLID) == 5 ? 'selected' : '' }}>Nível 5</option>
                        <option value="6" {{ old('PLID', $caracteristicas->PLID) == 6 ? 'selected' : '' }}>Nível 6</option>
                        <option value="7" {{ old('PLID', $caracteristicas->PLID) == 7 ? 'selected' : '' }}>Nível 7</option>
                        <option value="8" {{ old('PLID', $caracteristicas->PLID) == 8 ? 'selected' : '' }}>Nível 8</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Qualidades</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-origami />
                        Artes Marciais
                    </h3>
                    <select name="QARM" id="QARM"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QARM', $caracteristicas->QARM) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('QARM', $caracteristicas->QARM) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('QARM', $caracteristicas->QARM) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('QARM', $caracteristicas->QARM) == 3 ? 'selected' : '' }}>Valor 3</option>
                        <option value="4" {{ old('QARM', $caracteristicas->QARM) == 4 ? 'selected' : '' }}>Valor 4</option>
                        <option value="5" {{ old('QARM', $caracteristicas->QARM) == 5 ? 'selected' : '' }}>Valor 5</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-sparkles />
                        Beleza
                    </h3>
                    <select name="QBEL" id="QBEL"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QBEL', $caracteristicas->QBEL) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('QBEL', $caracteristicas->QBEL) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('QBEL', $caracteristicas->QBEL) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('QBEL', $caracteristicas->QBEL) == 3 ? 'selected' : '' }}>Valor 3</option>
                        <option value="4" {{ old('QBEL', $caracteristicas->QBEL) == 4 ? 'selected' : '' }}>Valor 4</option>
                        <option value="5" {{ old('QBEL', $caracteristicas->QBEL) == 5 ? 'selected' : '' }}>Valor 5</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-swords />
                        Corajoso
                    </h3>
                    <select name="QCOR" id="QCOR"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QCOR', $caracteristicas->QCOR) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('QCOR', $caracteristicas->QCOR) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('QCOR', $caracteristicas->QCOR) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('QCOR', $caracteristicas->QCOR) == 3 ? 'selected' : '' }}>Valor 3</option>
                        <option value="4" {{ old('QCOR', $caracteristicas->QCOR) == 4 ? 'selected' : '' }}>Valor 4</option>
                        <option value="5" {{ old('QCOR', $caracteristicas->QCOR) == 5 ? 'selected' : '' }}>Valor 5</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-siren />
                        Casos Criminais
                    </h3>
                    <select name="QCAS" id="QCAS"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QCAS', $caracteristicas->QCAS) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('QCAS', $caracteristicas->QCAS) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('QCAS', $caracteristicas->QCAS) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('QCAS', $caracteristicas->QCAS) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-dumbbell />
                        Duro de Matar
                    </h3>
                    <select name="QDDM" id="QDDM"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QDDM', $caracteristicas->QDDM) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('QDDM', $caracteristicas->QDDM) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('QDDM', $caracteristicas->QDDM) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('QDDM', $caracteristicas->QDDM) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-rabbit />
                        Bom Reflexo
                    </h3>
                    <select name="QBRX" id="QBRX"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QBRX', $caracteristicas->QBRX) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('QBRX', $caracteristicas->QBRX) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('QBRX', $caracteristicas->QBRX) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('QBRX', $caracteristicas->QBRX) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-flask-conical />
                        Genialidade
                    </h3>
                    <select name="QGEL" id="QGEL"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QGEL', $caracteristicas->QGEL) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="4" {{ old('QGEL', $caracteristicas->QGEL) == 4 ? 'selected' : '' }}>Valor 4</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-dna />
                        Genética Boa
                    </h3>
                    <select name="QGEN" id="QGEN"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QGEN', $caracteristicas->QGEN) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="3" {{ old('QGEN', $caracteristicas->QGEN) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-rocking-chair />
                        Tranquilidade
                    </h3>
                    <select name="QTRA" id="QTRA"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QTRA', $caracteristicas->QTRA) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="3" {{ old('QTRA', $caracteristicas->QTRA) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-bubbles />
                        Sentido Aguçado
                    </h3>
                    <select name="QSEA" id="QSEA"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QSEA', $caracteristicas->QSEA) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="3" {{ old('QSEA', $caracteristicas->QSEA) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-fingerprint-pattern />
                        Adaptabilidade
                    </h3>
                    <select name="QADA" id="QADA"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QADA', $caracteristicas->QADA) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('QADA', $caracteristicas->QADA) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-tv />
                        Filmes de Ação
                    </h3>
                    <select name="QFDA" id="QFDA"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QFDA', $caracteristicas->QFDA) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('QFDA', $caracteristicas->QFDA) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-club />
                        Jogador de Poker
                    </h3>
                    <select name="QJDP" id="QJDP"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QJDP', $caracteristicas->QJDP) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('QJDP', $caracteristicas->QJDP) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-hat-glasses />
                        Lábia
                    </h3>
                    <select name="QLAB" id="QLAB"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QLAB', $caracteristicas->QLAB) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('QLAB', $caracteristicas->QLAB) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-hand-helping />
                        Malandragem
                    </h3>
                    <select name="QMAL" id="QMAL"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QMAL', $caracteristicas->QMAL) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('QMAL', $caracteristicas->QMAL) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-id-card />
                        Carteira de Motorista
                    </h3>
                    <select name="QCNH" id="QCNH"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QCNH', $caracteristicas->QCNH) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('QCNH', $caracteristicas->QCNH) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
            </section>
            <section class="relative flex justify-center gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4 max-w-1/2">
                    <h3>
                        <x-lucide-camera />
                        Memória Fotográfica
                    </h3>
                    <select name="QMMF" id="QMMF"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('QMMF', $caracteristicas->QMMF) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('QMMF', $caracteristicas->QMMF) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
            </section>
            <hr class="border border-bg-tertiary my-6">
            <h2>Defeitos</h2>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-meh />
                        Antipatia
                    </h3>
                    <select name="DANT" id="DANT"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DANT', $caracteristicas->DANT) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('DANT', $caracteristicas->DANT) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('DANT', $caracteristicas->DANT) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('DANT', $caracteristicas->DANT) == 3 ? 'selected' : '' }}>Valor 3</option>
                        <option value="4" {{ old('DANT', $caracteristicas->DANT) == 4 ? 'selected' : '' }}>Valor 4</option>
                        <option value="5" {{ old('DANT', $caracteristicas->DANT) == 5 ? 'selected' : '' }}>Valor 5</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-cloud-lightning />
                        Azarado
                    </h3>
                    <select name="DAZA" id="DAZA"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DAZA', $caracteristicas->DAZA) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('DAZA', $caracteristicas->DAZA) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('DAZA', $caracteristicas->DAZA) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('DAZA', $caracteristicas->DAZA) == 3 ? 'selected' : '' }}>Valor 3</option>
                        <option value="4" {{ old('DAZA', $caracteristicas->DAZA) == 4 ? 'selected' : '' }}>Valor 4</option>
                        <option value="5" {{ old('DAZA', $caracteristicas->DAZA) == 5 ? 'selected' : '' }}>Valor 5</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-bug />
                        Feiura
                    </h3>
                    <select name="DFEI" id="DFEI"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DFEI', $caracteristicas->DFEI) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('DFEI', $caracteristicas->DFEI) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('DFEI', $caracteristicas->DFEI) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('DFEI', $caracteristicas->DFEI) == 3 ? 'selected' : '' }}>Valor 3</option>
                        <option value="4" {{ old('DFEI', $caracteristicas->DFEI) == 4 ? 'selected' : '' }}>Valor 4</option>
                        <option value="5" {{ old('DFEI', $caracteristicas->DFEI) == 5 ? 'selected' : '' }}>Valor 5</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-bone />
                        Problemas Crônicos
                    </h3>
                    <select name="DPCR" id="DPCR"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DPCR', $caracteristicas->DPCR) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('DPCR', $caracteristicas->DPCR) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('DPCR', $caracteristicas->DPCR) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('DPCR', $caracteristicas->DPCR) == 3 ? 'selected' : '' }}>Valor 3</option>
                        <option value="4" {{ old('DPCR', $caracteristicas->DPCR) == 4 ? 'selected' : '' }}>Valor 4</option>
                        <option value="5" {{ old('DPCR', $caracteristicas->DPCR) == 5 ? 'selected' : '' }}>Valor 5</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-badge-alert />
                        Covarde
                    </h3>
                    <select name="DCOV" id="DCOV"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DCOV', $caracteristicas->DCOV) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('DCOV', $caracteristicas->DCOV) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('DCOV', $caracteristicas->DCOV) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('DCOV', $caracteristicas->DCOV) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-message-circle-dashed />
                        Crenças Estranhas
                    </h3>
                    <select name="DCRE" id="DCRE"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DCRE', $caracteristicas->DCRE) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('DCRE', $caracteristicas->DCRE) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('DCRE', $caracteristicas->DCRE) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('DCRE', $caracteristicas->DCRE) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-syringe />
                        Medo de Sangue
                    </h3>
                    <select name="DMDS" id="DMDS"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DMDS', $caracteristicas->DMDS) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('DMDS', $caracteristicas->DMDS) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('DMDS', $caracteristicas->DMDS) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('DMDS', $caracteristicas->DMDS) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-activity />
                        Problemas Psicológicos
                    </h3>
                    <select name="DPSI" id="DPSI"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DPSI', $caracteristicas->DPSI) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="1" {{ old('DPSI', $caracteristicas->DPSI) == 1 ? 'selected' : '' }}>Valor 1</option>
                        <option value="2" {{ old('DPSI', $caracteristicas->DPSI) == 2 ? 'selected' : '' }}>Valor 2</option>
                        <option value="3" {{ old('DPSI', $caracteristicas->DPSI) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-moon />
                        Pesadelos Frequentes
                    </h3>
                    <select name="DPSE" id="DPSE"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DPSE', $caracteristicas->DPSE) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="3" {{ old('DPSE', $caracteristicas->DPSE) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-octagon-pause />
                        Preguiçoso
                    </h3>
                    <select name="DPRE" id="DPRE"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DPRE', $caracteristicas->DPRE) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="3" {{ old('DPRE', $caracteristicas->DPRE) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-refresh-ccw-dot />
                        Procastinador
                    </h3>
                    <select name="DPRO" id="DPRO"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DPRO', $caracteristicas->DPRO) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="3" {{ old('DPRO', $caracteristicas->DPRO) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-video-off />
                        TDAH
                    </h3>
                    <select name="DTDA" id="DTDA"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DTDA', $caracteristicas->DTDA) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="3" {{ old('DTDA', $caracteristicas->DTDA) == 3 ? 'selected' : '' }}>Valor 3</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-megaphone />
                        Irresponsável
                    </h3>
                    <select name="DIRR" id="DIRR"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DIRR', $caracteristicas->DIRR) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('DIRR', $caracteristicas->DIRR) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-drama />
                        Palhaço
                    </h3>
                    <select name="DPLH" id="DPLH"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DPLH', $caracteristicas->DPLH) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('DPLH', $caracteristicas->DPLH) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
            </section>
            <section class="flex gap-4 *:flex-1 *:*:first:flex-1 *:*:p-2">
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-thumbs-down />
                        Sem Noção
                    </h3>
                    <select name="DSNO" id="DSNO"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DSNO', $caracteristicas->DSNO) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('DSNO', $caracteristicas->DSNO) == 2 ? 'selected' : '' }}>Valor 2</option>
                    </select>
                </section>
                <section class="flex gap-4">
                    <h3>
                        <x-lucide-eye-off />
                        Visão Ruim
                    </h3>
                    <select name="DVRU" id="DVRU"
                        class="w-40 bg-bg-tertiary rounded-lg"
                        >
                        <option value="0" {{ old('DVRU', $caracteristicas->DVRU) == 0 ? 'selected' : '' }}>Valor 0</option>
                        <option value="2" {{ old('DVRU', $caracteristicas->DVRU) == 2 ? 'selected' : '' }}>Valor 2</option>
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