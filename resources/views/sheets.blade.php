@extends('layouts.app')

@section('content')
    <main class="relative bg-bg-secondary h-[calc(100dvh-120px)] p-4 flex flex-col gap-4">
        <section class="relative flex gap-4 items-center justify-center">
            <section class="bg-bg-primary w-full flex justify-center h-15 p-2 rounded-lg">
                <section class="flex justify-center *:flex *:items-center *:justify-center gap-2 *:gap-2 *:rounded-lg w-80 *:flex-1">
                    <a href="{{ route('sheets.add') }}" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus-icon lucide-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
                        <span>Adicionar</span>
                    </a>
                </section>
            </section>
        </section>
        <section class="relative h-[calc(100dvh-230px)] flex flex-1 gap-4 *:rounded-lg *:relative list-none">
            <section id="characters" class="flex-1 bg-bg-primary flex flex-col h-[calc(100dvh-230px)] overflow-hidden">
                <ul class="py-2 bg-highlight-secondary flex items-center justify-center">
                    <span class="text-black text-xl font-bold">Personagens</span>
                </ul>
                <ul class="list-decimal h-[calc(100%-40px)] overflow-y-auto flex flex-col gap-0.5">
                    @forelse ($sheets as $index => $p)
                        <li class="character-item bg-bg-tertiary hover:bg-bg-tertiary-hover *:py-3" data-type="{{ $p->tipo }}">
                            <a id="name" href="{{ route('sheets', $p) }}" class="flex items-center justify-start *:min-w-10 *:last:justify-center *:first:flex-1 *:first:px-4 hover:*:last:flex">
                                <span class="item-name"> {{ $p->nome }} </span>
                                <span class="item-icon hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                                </span>
                            </a>
                        </li>
                    @empty
                        <li>
                            <span>Nenhum Personagem</span>
                        </li>
                    @endforelse
                </ul>
                <ul class="py-2 bg-bg-primary flex justify-center *:flex *:items-center *:justify-center gap-2 border-t-2 border-highlight-secondary">
                    <span>Filtro</span>
                    <select id="filter-list" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 max-w-50 rounded-lg">
                        <option value="1">Jogador</option>
                        <option value="2">NPC</option>
                        <option value="3">Putrefato</option>
                    </select>
                </ul>
            </section>
            <section class="flex-2 relative bg-bg-primary rounded-lg overflow-y-auto max-h-full p-4 *:my-4 [&_h1]:text-2xl [&_h1,h2]:font-bold [&_hr]:border [&_hr]:border-bg-tertiary hover:[&_a:first-of-type]:block">
                @if($selected)
                    @php
                        if ($selected->tipo == 0) { $typeText = 'Sem Tipo'; }
                        if ($selected->tipo == 1) { $typeText = 'Jogador'; }
                        if ($selected->tipo == 2) { $typeText = 'NPC'; }
                        if ($selected->tipo == 3) { $typeText = 'Putrefato'; }
                    @endphp
                    <a href="{{ route('sheets.edit', $selected) }}" class="hidden absolute top-4 right-4 bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/><path d="m15 5 4 4"/></svg>
                    </a>
                    <h1>Tipo: {{ $typeText }} </h1>
                    <hr>
                    <h1>Nome e Sobrenome</h1>
                    <p> {{ $selected->nome }} </p>
                    @if($selected->tipo !== 3)
                        <hr>
                        <h1>Idade e Aniversário</h1>
                        <p> {{ $selected->idade }} anos, {{ $selected->aniversario }} </p>
                        <hr>
                        <h1>Alcunha</h1>
                        <p> {{ $selected->alcunha }} </p>
                        <hr>
                        <h1>Profissão Atual</h1>
                        <p> {{ $selected->profissao_atual }} </p>
                        @if($selected->tipo !== 2)
                            <hr>
                            <h1>Ex-Profissões</h1>
                            <p> {{ $selected->ex_profissoes }} </p>
                        @endif
                        <hr>
                        <h1>Experiências</h1>
                        <p> {{ $selected->experiencias }} </p>
                        @if($selected->tipo !== 2)
                            <hr>
                            <h1>Hobbies</h1>
                            <p> {{ $selected->hobbies }} </p>
                            <hr>
                            <h1>Aparência</h1>
                            <p> {{ $selected->aparencia }} </p>
                        @endif
                        <hr>
                        <h1>Resumo</h1>
                        <p> {{ $selected->resumo }} </p>
                        @if($selected->tipo !== 2)
                            <hr>
                            <h1>História</h1>
                            <p> {{ $selected->historia }} </p>
                        @endif
                    @endif
                    <hr>
                    <h1>Habilidade Primária</h1>
                    <p> {{ $selected->habilidade_um }} </p>
                    <hr>
                    <h1>Habilidade Secundária</h1>
                    <p> {{ $selected->habilidade_dois }} </p>
                @else
                    <h1>Selecione um personagem</h1>
                @endif
            </section>
            <section class="flex-2 relative bg-bg-primary rounded-lg overflow-y-auto max-h-full p-4 *:my-4 [&_h1]:text-2xl [&_h1,h2]:font-bold [&_hr]:border [&_hr]:border-bg-tertiary hover:[&_a:first-of-type]:block">
                @if ($selected)
                    <a href="{{ route('caracteristicas.edit', $selected) }}" class="hidden absolute top-4 right-4 bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/><path d="m15 5 4 4"/></svg>
                    </a>
                    @if ($selected->caracteristicas)
                        @php $s = $selected->caracteristicas; @endphp
                        <h1>Nome e Sobrenome</h1>
                        <p>{{ $selected->nome }}</p>
                        <hr>
                        <h1>Atributos</h1>
                        <p>Força: <b>{{ $s->AFOR }}</b></p>
                        <p>Destreza: <b>{{ $s->ADES }}</b></p>
                        <p>Constituição: <b>{{ $s->ACON }}</b></p>
                        <p>Inteligência: <b>{{ $s->AINT }}</b></p>
                        <p>Percepção: <b>{{ $s->APER }}</b></p>
                        <p>Força de Vontade: <b>{{ $s->AVON }}</b></p>
                        <hr>
                        @php
                            $AFORLvl6 = 0; $ADESLvl6 = 0; $ACONLvl6 = 0; $AINTLvl6 = 0; $APERLvl6 = 0; $AVONLvl6 = 0;
                            if ($s->AFOR == 0) { $s->AFOR = 1; } if ($s->AFOR == 6) { $AFORLvl6 = 2; }
                            if ($s->ADES == 0) { $s->ADES = 1; } if ($s->ADES == 6) { $ADESLvl6 = 2; }
                            if ($s->ACON == 0) { $s->ACON = 1; } if ($s->ACON == 6) { $ACONLvl6 = 2; }
                            if ($s->AINT == 0) { $s->AINT = 1; } if ($s->AINT == 6) { $AINTLvl6 = 2; }
                            if ($s->APER == 0) { $s->APER = 1; } if ($s->APER == 6) { $APERLvl6 = 2; }
                            if ($s->AVON == 0) { $s->AVON = 1; } if ($s->AVON == 6) { $AVONLvl6 = 2; }
                            $ASPV = ($s->AFOR + $s->ACON) * 4 + 10 + (2 * $s->QDDM);
                            $ASVE = ($s->ADES + $s->ACON) * 2 + $s->AFOR;
                            $ASCC = ($s->AFOR + $s->ACON) * 2;
                            $ASRE = 15 + $AFORLvl6 + $ADESLvl6 + $ACONLvl6 + $AINTLvl6 + $APERLvl6 + $AVONLvl6;
                        @endphp
                        <h1>Atributos Secundários</h1>
                        <p>Pontos de Vida: <b>{{ $ASPV }}</b></p>
                        <p>Velocidade: <b>{{ $ASVE }}m/t</b></p>
                        <p>Capacidade de Carga: <b>{{ $ASCC }}</b></p>
                        <p>Resistência: <b>{{ $ASRE }}</b></p>
                        <hr>
                        <h1>Perícias Físicas</h1>
                        <p>Armas Brancas: <b>{{ $s->PAMB }}</b></p>
                        <p>Armas de Fogo: <b>{{ $s->PAMF }}</b></p>
                        <p>Acrobacia: <b>{{ $s->PACR }}</b></p>
                        <p>Atletismo: <b>{{ $s->PATL }}</b></p>
                        <p>Briga: <b>{{ $s->PBRI }}</b></p>
                        <p>Esquiva: <b>{{ $s->PESQ }}</b></p>
                        <p>Furtividade: <b>{{ $s->PFUR }}</b></p>
                        <hr>
                        <h1>Perícias Técnicas</h1>
                        <p>Artesanato: <b>{{ $s->PART }}</b></p>
                        <p>Concentração: <b>{{ $s->PCOC }}</b></p>
                        <p>Condução: <b>{{ $s->PCOD }}</b></p>
                        <p>Exploração: <b>{{ $s->PEPL }}</b></p>
                        <p>Investigação: <b>{{ $s->PINV }}</b></p>
                        <p>Ladinagem: <b>{{ $s->PLAD }}</b></p>
                        <p>Primeiros Socorros: <b>{{ $s->PPRS }}</b></p>
                        <hr>
                        <h1>Perícias Intelectuais</h1>
                        <p>Conhecimento Acadêmico: <b>{{ $s->PCAC }}</b></p>
                        <p>Conhecimento Informático: <b>{{ $s->PCIN }}</b></p>
                        <p>Conhecimento Médico: <b>{{ $s->PCME }}</b></p>
                        <p>Conhecimento Mental: <b>{{ $s->PCMA }}</b></p>
                        <p>Conhecimento Militar: <b>{{ $s->PCMI }}</b></p>
                        <p>Conhecimento Popular: <b>{{ $s->PCPO }}</b></p>
                        <hr>
                        <h1>Perícias Sociais</h1>
                        <p>Blefe: <b>{{ $s->PBLE }}</b></p>
                        <p>Carisma: <b>{{ $s->PCRI }}</b></p>
                        <p>Diplomacia: <b>{{ $s->PDIP }}</b></p>
                        <p>Intimidação: <b>{{ $s->PTIM }}</b></p>
                        <p>Intuição: <b>{{ $s->PTUI }}</b></p>
                        <p>Liderança: <b>{{ $s->PLID }}</b></p>
                        @if ($selected->tipo !== 3)
                            <hr>
                            <h1>Qualidades</h1>
                            <p>Artes Marciais: <b>{{ $s->QARM }}</b></p>
                            <p>Beleza: <b>{{ $s->QBEL }}</b></p>
                            <p>Corajoso: <b>{{ $s->QCOR }}</b></p>
                            <p>Casos Criminais: <b>{{ $s->QCAS }}</b></p>
                            <p>Duro de Matar: <b>{{ $s->QDDM }}</b></p>
                            <p>Bom Reflexo: <b>{{ $s->QBRX }}</b></p>
                            <p>Genialidade: <b>{{ $s->QGEL }}</b></p>
                            <p>Genética Boa: <b>{{ $s->QGEN }}</b></p>
                            <p>Tranquilidade: <b>{{ $s->QTRA }}</b></p>
                            <p>Sentido Aguçado: <b>{{ $s->QSEA }}</b></p>
                            <p>Adaptabilidade: <b>{{ $s->QADA }}</b></p>
                            <p>Filmes de Ação: <b>{{ $s->QFDA }}</b></p>
                            <p>Jogador de Poker: <b>{{ $s->QJDP }}</b></p>
                            <p>Lábia: <b>{{ $s->QLAB }}</b></p>
                            <p>Malandragem: <b>{{ $s->QMAL }}</b></p>
                            <p>Carteira de Motorista: <b>{{ $s->QCNH }}</b></p>
                            <p>Memória Fotográfica: <b>{{ $s->QMMF }}</b></p>
                            <hr>
                            <h1>Defeitos</h1>
                            <p>Antipatia: <b>{{ $s->DANT }}</b></p>
                            <p>Azarado: <b>{{ $s->DAZA }}</b></p>
                            <p>Feiura: <b>{{ $s->DFEI }}</b></p>
                            <p>Problemas Crônicos: <b>{{ $s->DPCR }}</b></p>
                            <p>Covarde: <b>{{ $s->DCOV }}</b></p>
                            <p>Crenças Estranhas: <b>{{ $s->DCRE }}</b></p>
                            <p>Medo de Sangue: <b>{{ $s->DMDS }}</b></p>
                            <p>Problemas Psicológicos: <b>{{ $s->DPSI }}</b></p>
                            <p>Pesadelos Frequentes: <b>{{ $s->DPSE }}</b></p>
                            <p>Preguiçoso: <b>{{ $s->DPRE }}</b></p>
                            <p>Procastinador: <b>{{ $s->DPRO }}</b></p>
                            <p>TDAH: <b>{{ $s->DTDA }}</b></p>
                            <p>Irresponsável: <b>{{ $s->DIRR }}</b></p>
                            <p>Palhaço: <b>{{ $s->DPLH }}</b></p>
                            <p>Sem Noção: <b>{{ $s->DSNO }}</b></p>
                            <p>Visão Ruim: <b>{{ $s->DVRU }}</b></p>
                        @endif
                    @endif
                    <h1>Sem Características definidas</h1>
                @else
                    <h1>Selecione um Personagem</h1>
                @endif
            </section>
        </section>
        @if(session('success'))
            <section id="toast" class="hidden absolute bottom-8 right-8 p-2 gap-2 rounded-lg bg-succes hover:bg-succes-hover text-black overflow-hidden cursor-pointer">
                <span>
                    {{ session('success.text') }}
                    <b>{{ session('success.name') }}</b>
                    {{ session('success.action') }}
                </span>
                <span class="absolute bottom-0 left-0 h-1 w-full bg-succes-progress animate-progress-bar"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
            </section>
            @endif
            @if($errors->any())
            <section id="toast" class="hidden absolute bottom-8 right-8 p-2 gap-2 rounded-lg bg-error hover:bg-error-hover text-black overflow-hidden cursor-pointer">
                <span>Algo deu errado!</span>
                <span class="absolute bottom-0 left-0 h-1 w-full bg-succes-progress animate-progress-bar"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
            </section>
        @endif
    </main>
@endsection

@push('scripts')
    <script>

const filterList = document.getElementById('filter-list');
const charactersList = document.querySelectorAll('#characters .character-item');

filterList.value = localStorage.getItem('filter') ? localStorage.getItem('filter') : 1;

function applyFilterList() {
    let selectedType = filterList.value;

    localStorage.setItem('filter', selectedType);

    charactersList.forEach(item => {
        if (item.dataset.type === localStorage.getItem('filter')) {
            item.classList.remove('hidden');
        }
        else {
            item.classList.add('hidden');
        }
    });
}

filterList.addEventListener('change', applyFilterList);
applyFilterList();

const toast = document.getElementById('toast');
let duration = 5000;
toast?.addEventListener('click', ()=> {
    toast.classList.remove('flex');
    toast.classList.add('hidden');
});

if (toast) {
    setTimeout(() => {
        toast.classList.remove('hidden');
        toast.classList.add('flex');
    }, 0);

    setTimeout(() => {
        toast.classList.remove('flex');
        toast.classList.add('hidden');
    }, duration);
}

    </script>
@endpush