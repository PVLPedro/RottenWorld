@extends('layouts.app')

@section('content')
    <main class="relative bg-bg-secondary h-[calc(100dvh-120px)] p-1 lg:p-4 gap-1 lg:gap-4 flex flex-col justify-center sm:grid sm:grid-cols-2 lg:flex lg:flex-row flex-wrap">
        <section id="characters" class="h-32 sm:h-auto sm:flex-1 flex gap-1 sm:gap-4 sm:flex-col row-span-2 lg:flex-2 bg-bg-secondary rounded-lg">
            <section class="flex justify-center gap-2 p-1 sm:p-2 rounded-lg bg-bg-primary">
                <a href="{{ route('create-sheet') }}" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 flex flex-col sm:flex-row items-center justify-center gap-2 rounded-sm flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus-icon lucide-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
                    <span class="hidden minimal:inline text-sm sm:text-md">Adicionar</span>
                </a>
            </section>
            <section class="flex-1 flex flex-col overflow-hidden rounded-lg bg-bg-primary">
                <ul class="py-1 sm:py-2 bg-highlight-secondary flex items-center justify-center">
                    <span class="text-black text-sm sm:text-xl font-bold">Personagens</span>
                </ul>
                <ul class="list-decimal h-[calc(100%-40px)] overflow-y-auto flex flex-col gap-0.5">
                    @forelse ($sheets as $index => $p)
                        <li class="character-item bg-bg-tertiary hover:bg-bg-tertiary-hover *:py-3" data-type="{{ $p->tipo }}">
                            <a id="name" href="{{ route('sheet.show', $p) }}" class="flex items-center justify-start *:min-w-10 *:last:justify-center *:first:flex-1 *:first:px-4 hover:*:last:flex">
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
                <ul class="py-1 sm:py-2 bg-bg-primary flex justify-center *:flex *:items-center *:justify-center gap-0.5 sm:gap-2 border-t-2 border-highlight-secondary">
                    <span>Filtro</span>
                    <select id="filter-list" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-1 sm:p-2 max-w-50 rounded-lg">
                        <option value="1">Jogador</option>
                        <option value="2">NPC</option>
                        <option value="3">Putrefato</option>
                    </select>
                    <span id="filtered-list" class="min-w-20"></span>
                </ul>
            </section>
        </section>
        <section class="overflow-y-auto flex-5 h-full lg:flex-3 relative bg-bg-primary rounded-lg p-1 sm:p-4 *:my-4 [&_h1]:text-2xl [&_h1,h2]:font-bold [&_hr]:border [&_hr]:border-bg-tertiary">
            @if($selected)
                @php
                    if ($selected->tipo == 0) { $typeText = 'Sem Tipo'; }
                    if ($selected->tipo == 1) { $typeText = 'Jogador'; }
                    if ($selected->tipo == 2) { $typeText = 'NPC'; }
                    if ($selected->tipo == 3) { $typeText = 'Putrefato'; }
                @endphp
                <a href="{{ route('edit-sheet', $selected) }}" class="w-10 sticky float-right top-4 bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/><path d="m15 5 4 4"/></svg>
                </a>
                <h1 class="pt-2">Tipo: {{ $typeText }} </h1>
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
        <section class="overflow-y-auto flex-5 h-full lg:flex-3 relative bg-bg-primary rounded-lg p-1 sm:p-4 *:my-4 [&_h1]:text-2xl [&_h1,h2]:font-bold [&_hr]:border [&_hr]:border-bg-tertiary">
            @if ($selected)
                <a href="{{ route('edit-sheet.features', $selected) }}" class="w-10 sticky float-right top-4 bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/><path d="m15 5 4 4"/></svg>
                </a>
                @if ($selected)
                    @php
                        $s = $selected;
                        @include(resource_path('views/partials/features.php'));
                    @endphp
                    <h1 class="pt-2">Nome e Sobrenome</h1>
                    <p>{{ $selected->nome }}</p>
                    <hr>
                    <h1>Atributos</h1>
                    <p>Força: <b>{{ $AFOR }}</b></p>
                    <p>Destreza: <b>{{ $ADES }}</b></p>
                    <p>Constituição: <b>{{ $ACON }}</b></p>
                    <p>Inteligência: <b>{{ $AINT }}</b></p>
                    <p>Percepção: <b>{{ $APER }}</b></p>
                    <p>Força de Vontade: <b>{{ $AVON }}</b></p>
                    <hr>
                    <h1>Atributos Secundários</h1>
                    <p>Pontos de Vida: <b>{{ $ASPV }}</b></p>
                    <p>Velocidade: <b>{{ $ASVE }}m/t</b></p>
                    <p>Capacidade de Carga: <b>{{ $ASCC }}</b></p>
                    <p>Resistência: <b>{{ $ASRE }}</b></p>
                    <hr>
                    <h1>Perícias Físicas</h1>
                    <p>Armas Brancas: <b>{{ $PAMB }}</b></p>
                    <p>Armas de Fogo: <b>{{ $PAMF }}</b></p>
                    <p>Acrobacia: <b>{{ $PACR }}</b></p>
                    <p>Atletismo: <b>{{ $PATL }}</b></p>
                    <p>Briga: <b>{{ $PBRI }}</b></p>
                    <p>Esquiva: <b>{{ $PESQ }}</b></p>
                    <p>Furtividade: <b>{{ $PFUR }}</b></p>
                    <hr>
                    <h1>Perícias Técnicas</h1>
                    <p>Artesanato: <b>{{ $PART }}</b></p>
                    <p>Concentração: <b>{{ $PCOC }}</b></p>
                    <p>Condução: <b>{{ $PCOD }}</b></p>
                    <p>Exploração: <b>{{ $PEPL }}</b></p>
                    <p>Investigação: <b>{{ $PINV }}</b></p>
                    <p>Ladinagem: <b>{{ $PLAD }}</b></p>
                    <p>Primeiros Socorros: <b>{{ $PPRS }}</b></p>
                    <hr>
                    <h1>Perícias Intelectuais</h1>
                    <p>Conhecimento Acadêmico: <b>{{ $PCAC }}</b></p>
                    <p>Conhecimento Informático: <b>{{ $PCIN }}</b></p>
                    <p>Conhecimento Médico: <b>{{ $PCME }}</b></p>
                    <p>Conhecimento Mental: <b>{{ $PCMA }}</b></p>
                    <p>Conhecimento Militar: <b>{{ $PCMI }}</b></p>
                    <p>Conhecimento Popular: <b>{{ $PCPO }}</b></p>
                    <hr>
                    <h1>Perícias Sociais</h1>
                    <p>Blefe: <b>{{ $PBLE }}</b></p>
                    <p>Carisma: <b>{{ $PCRI }}</b></p>
                    <p>Diplomacia: <b>{{ $PDIP }}</b></p>
                    <p>Intimidação: <b>{{ $PTIM }}</b></p>
                    <p>Intuição: <b>{{ $PTUI }}</b></p>
                    <p>Liderança: <b>{{ $PLID }}</b></p>
                    @if ($selected->tipo !== 3)
                        <hr>
                        <h1>Qualidades</h1>
                        <p>Artes Marciais: <b>{{ $QARM }}</b></p>
                        <p>Beleza: <b>{{ $QBEL }}</b></p>
                        <p>Corajoso: <b>{{ $QCOR }}</b></p>
                        <p>Casos Criminais: <b>{{ $QCAS }}</b></p>
                        <p>Duro de Matar: <b>{{ $QDDM }}</b></p>
                        <p>Bom Reflexo: <b>{{ $QBRX }}</b></p>
                        <p>Genialidade: <b>{{ $QGEL }}</b></p>
                        <p>Genética Boa: <b>{{ $QGEN }}</b></p>
                        <p>Tranquilidade: <b>{{ $QTRA }}</b></p>
                        <p>Sentido Aguçado: <b>{{ $QSEA }}</b></p>
                        <p>Adaptabilidade: <b>{{ $QADA }}</b></p>
                        <p>Filmes de Ação: <b>{{ $QFDA }}</b></p>
                        <p>Jogador de Poker: <b>{{ $QJDP }}</b></p>
                        <p>Lábia: <b>{{ $QLAB }}</b></p>
                        <p>Malandragem: <b>{{ $QMAL }}</b></p>
                        <p>Carteira de Motorista: <b>{{ $QCNH }}</b></p>
                        <p>Memória Fotográfica: <b>{{ $QMMF }}</b></p>
                        <hr>
                        <h1>Defeitos</h1>
                        <p>Antipatia: <b>{{ $DANT }}</b></p>
                        <p>Azarado: <b>{{ $DAZA }}</b></p>
                        <p>Feiura: <b>{{ $DFEI }}</b></p>
                        <p>Problemas Crônicos: <b>{{ $DPCR }}</b></p>
                        <p>Covarde: <b>{{ $DCOV }}</b></p>
                        <p>Crenças Estranhas: <b>{{ $DCRE }}</b></p>
                        <p>Medo de Sangue: <b>{{ $DMDS }}</b></p>
                        <p>Problemas Psicológicos: <b>{{ $DPSI }}</b></p>
                        <p>Pesadelos Frequentes: <b>{{ $DPSE }}</b></p>
                        <p>Preguiçoso: <b>{{ $DPRE }}</b></p>
                        <p>Procastinador: <b>{{ $DPRO }}</b></p>
                        <p>TDAH: <b>{{ $DTDA }}</b></p>
                        <p>Irresponsável: <b>{{ $DIRR }}</b></p>
                        <p>Palhaço: <b>{{ $DPLH }}</b></p>
                        <p>Sem Noção: <b>{{ $DSNO }}</b></p>
                        <p>Visão Ruim: <b>{{ $DVRU }}</b></p>
                    @endif
                @endif
                <h1>Sem Características definidas</h1>
            @else
                <h1>Selecione um Personagem</h1>
            @endif
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
const filteredList = document.getElementById('filtered-list');

filterList.value = localStorage.getItem('filter') ? localStorage.getItem('filter') : 1;

function applyFilterList() {
    const selectedType = filterList.value;
    let filteredCount = 0;

    localStorage.setItem('filter', selectedType);

    charactersList.forEach(item => {
        if (item.dataset.type === localStorage.getItem('filter')) {
            item.classList.remove('hidden');
            filteredCount++;
        }
        else {
            item.classList.add('hidden');
        }

        filteredList.textContent = `Total: ${filteredCount}`;
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