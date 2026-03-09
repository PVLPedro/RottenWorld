@extends('layouts.app')

@section('content')
    <main class="relative bg-bg-secondary h-[calc(100dvh-120px)] p-4 flex flex-col gap-4">
        <section class="relative flex gap-4 items-center justify-center">
            <section class="bg-bg-primary w-full flex justify-center gap-4 p-2 rounded-lg *:flex *:items-center *:justify-center *:gap-2 *:rounded-lg *:min-w-50 *:p-1.5">
                <a href="{{ route('addSheet') }}" class="bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus-icon lucide-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
                    <span>Adicionar</span>
                </a>
            </section>
        </section>
        <section class="relative h-[calc(100dvh-230px)] flex flex-1 gap-4 rounded-lg overflow-hidden list-none">
            <section class="flex-1 bg-bg-primary flex flex-col rounded-lg overflow-hidden">
                <ul class="h-10 bg-highlight-secondary flex items-center justify-center">
                    <span class="text-black text-xl font-bold">Personagens</span>
                </ul>
                <ul class="list-decimal h-[calc(100%-40px)] overflow-y-auto">
                    @forelse ($sheets as $index => $p)
                        <li class="odd:bg-bg-tertiary-variant even:bg-bg-tertiary hover:bg-bg-secondary-hover flex items-center justify-center">
                            <a id="name" href="{{ route('sheets', $p) }}" class="flex-1 flex items-center justify-start *:py-3 *:min-w-10 *:first:text-center *:first:font-bold *:nth-[2]:flex-1">
                                <span class="item-order"> {{ $index + 1 }} </span>
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
            </section>
            <section class="flex-2 relative bg-bg-primary rounded-lg overflow-y-auto max-h-full p-4 *:my-4 [&_h1]:text-2xl [&_h1,h2]:font-bold [&_hr]:border [&_hr]:border-bg-tertiary hover:[&_a:first-of-type]:block">
                @if($selected)
                    <a href="{{ route('editSheet', $selected) }}" class="hidden absolute top-4 right-4 bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/><path d="m15 5 4 4"/></svg>
                    </a>
                    <h1>Nome e Sobrenome</h1>
                    <p> {{ $selected->nome }} </p>
                    <hr>
                    <h1>Idade e Aniversário</h1>
                    <p> {{ $selected->idade }} anos, {{ $selected->aniversario }} </p>
                    <hr>
                    <h1>Alcunha</h1>
                    <p> {{ $selected->alcunha }} </p>
                    <hr>
                    <h1>Profissão Atual</h1>
                    <p> {{ $selected->profissao_atual }} </p>
                    <hr>
                    <h1>Ex-Profissões</h1>
                    <p> {{ $selected->ex_profissoes }} </p>
                    <hr>
                    <h1>Experiências</h1>
                    <p> {{ $selected->experiencias }} </p>
                    <hr>
                    <h1>Hobbies</h1>
                    <p> {{ $selected->hobbies }} </p>
                    <hr>
                    <h1>Aparência</h1>
                    <p> {{ $selected->aparencia }} </p>
                    <hr>
                    <h1>Resumo</h1>
                    <p> {{ $selected->resumo }} </p>
                    <hr>
                    <h1>História</h1>
                    <p> {{ $selected->historia }} </p>
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
                        @php $c = $selected->caracteristicas; @endphp
                        <h1>Nome e Sobrenome</h1>
                        <p>{{ $selected->nome }}</p>
                        <hr>
                        <h1>Atributos</h1>
                        <p>Força: <b>{{ $c->AFOR }}</b></p>
                        <p>Destreza: <b>{{ $c->ADES }}</b></p>
                        <p>Constituição: <b>{{ $c->ACON }}</b></p>
                        <p>Inteligência: <b>{{ $c->AINT }}</b></p>
                        <p>Percepção: <b>{{ $c->APER }}</b></p>
                        <p>Força de Vontade: <b>{{ $c->AVON }}</b></p>
                        <hr>
                        @php
                            $AFORLvl6 = 0; $ADESLvl6 = 0; $ACONLvl6 = 0; $AINTLvl6 = 0; $APERLvl6 = 0; $AVONLvl6 = 0;
                            if ($c->AFOR == 0) { $c->AFOR = 1; if ($c->AFOR == 6) { $AFORLvl6 = 2; } }
                            if ($c->ADES == 0) { $c->ADES = 1; if ($c->ADES == 6) { $ADESLvl6 = 2; } }
                            if ($c->ACON == 0) { $c->ACON = 1; if ($c->ACON == 6) { $ACONLvl6 = 2; } }
                            if ($c->AINT == 0) { $c->AINT = 1; if ($c->AINT == 6) { $AINTLvl6 = 2; } }
                            if ($c->APER == 0) { $c->APER = 1; if ($c->APER == 6) { $APERLvl6 = 2; } }
                            if ($c->AVON == 0) { $c->AVON = 1; if ($c->AVON == 6) { $AVONLvl6 = 2; } }
                            $ASPV = ($c->AFOR + $c->ACON) * 4 + 10 + (2 * $c->QDDM);
                            $ASVE = ($c->ADES + $c->ACON) * 2;
                            $ASCC = ($c->AFOR + $c->ACON) * 2;
                            $ASRE = 15 + $AFORLvl6 + $ADESLvl6 + $ACONLvl6 + $AINTLvl6 + $APERLvl6 + $AVONLvl6;
                        @endphp
                        <h1>Atributos Secundários</h1>
                        <p>Pontos de Vida: <b>{{ $ASPV }}</b></p>
                        <p>Velocidade: <b>{{ $ASVE }}m/t</b></p>
                        <p>Capacidade de Carga: <b>{{ $ASCC }}</b></p>
                        <p>Resistência: <b>{{ $ASRE }}</b></p>
                        <hr>
                        <h1>Perícias Físicas</h1>
                        <p>Armas Brancas: <b>{{ $c->PAMB }}</b></p>
                        <p>Armas de Fogo: <b>{{ $c->PAMF }}</b></p>
                        <p>Acrobacia: <b>{{ $c->PACR }}</b></p>
                        <p>Atletismo: <b>{{ $c->PATL }}</b></p>
                        <p>Briga: <b>{{ $c->PBRI }}</b></p>
                        <p>Esquiva: <b>{{ $c->PESQ }}</b></p>
                        <p>Furtividade: <b>{{ $c->PFUR }}</b></p>
                        <hr>
                        <h1>Perícias Técnicas</h1>
                        <p>Artesanato: <b>{{ $c->PART }}</b></p>
                        <p>Concentração: <b>{{ $c->PCOC }}</b></p>
                        <p>Condução: <b>{{ $c->PCOD }}</b></p>
                        <p>Exploração: <b>{{ $c->PEPL }}</b></p>
                        <p>Investigação: <b>{{ $c->PINV }}</b></p>
                        <p>Ladinagem: <b>{{ $c->PLAD }}</b></p>
                        <p>Primeiros Socorros: <b>{{ $c->PPRS }}</b></p>
                        <hr>
                        <h1>Perícias Intelectuais</h1>
                        <p>Conhecimento Acadêmico: <b>{{ $c->PCAC }}</b></p>
                        <p>Conhecimento Informático: <b>{{ $c->PCIN }}</b></p>
                        <p>Conhecimento Médico: <b>{{ $c->PCME }}</b></p>
                        <p>Conhecimento Mental: <b>{{ $c->PCMA }}</b></p>
                        <p>Conhecimento Militar: <b>{{ $c->PCMI }}</b></p>
                        <p>Conhecimento Popular: <b>{{ $c->PCPO }}</b></p>
                        <hr>
                        <h1>Perícias Sociais</h1>
                        <p>Blefe: <b>{{ $c->PBLE }}</b></p>
                        <p>Carisma: <b>{{ $c->PCRI }}</b></p>
                        <p>Diplomacia: <b>{{ $c->PDIP }}</b></p>
                        <p>Intimidação: <b>{{ $c->PTIM }}</b></p>
                        <p>Intuição: <b>{{ $c->PTUI }}</b></p>
                        <p>Liderança: <b>{{ $c->PLID }}</b></p>
                        <hr>
                        <h1>Qualidades</h1>
                        <p>Artes Marciais: <b>{{ $c->QARM }}</b></p>
                        <p>Beleza: <b>{{ $c->QBEL }}</b></p>
                        <p>Corajoso: <b>{{ $c->QCOR }}</b></p>
                        <p>Casos Criminais: <b>{{ $c->QCAS }}</b></p>
                        <p>Duro de Matar: <b>{{ $c->QDDM }}</b></p>
                        <p>Bom Reflexo: <b>{{ $c->QBRX }}</b></p>
                        <p>Genialidade: <b>{{ $c->QGEL }}</b></p>
                        <p>Genética Boa: <b>{{ $c->QGEN }}</b></p>
                        <p>Tranquilidade: <b>{{ $c->QTRA }}</b></p>
                        <p>Sentido Aguçado: <b>{{ $c->QSEA }}</b></p>
                        <p>Adaptabilidade: <b>{{ $c->QADA }}</b></p>
                        <p>Filmes de Ação: <b>{{ $c->QFDA }}</b></p>
                        <p>Jogador de Poker: <b>{{ $c->QJDP }}</b></p>
                        <p>Lábia: <b>{{ $c->QLAB }}</b></p>
                        <p>Malandragem: <b>{{ $c->QMAL }}</b></p>
                        <p>Carteira de Motorista: <b>{{ $c->QCNH }}</b></p>
                        <p>Memória Fotográfica: <b>{{ $c->QMMF }}</b></p>
                        <hr>
                        <h1>Qualidades</h1>
                        <p>Antipatia: <b>{{ $c->DANT }}</b></p>
                        <p>Azarado: <b>{{ $c->DAZA }}</b></p>
                        <p>Feiura: <b>{{ $c->DFEI }}</b></p>
                        <p>Problemas Crônicos: <b>{{ $c->DPCR }}</b></p>
                        <p>Covarde: <b>{{ $c->DCOV }}</b></p>
                        <p>Crenças Estranhas: <b>{{ $c->DCRE }}</b></p>
                        <p>Medo de Sangue: <b>{{ $c->DMDS }}</b></p>
                        <p>Problemas Psicológicos: <b>{{ $c->DPSI }}</b></p>
                        <p>Pesadelos Frequentes: <b>{{ $c->DPSE }}</b></p>
                        <p>Preguiçoso: <b>{{ $c->DPRE }}</b></p>
                        <p>Procastinador: <b>{{ $c->DPRO }}</b></p>
                        <p>TDAH: <b>{{ $c->DTDA }}</b></p>
                        <p>Irresponsável: <b>{{ $c->DIRR }}</b></p>
                        <p>Palhaço: <b>{{ $c->DPLH }}</b></p>
                        <p>Sem Noção: <b>{{ $c->DSNO }}</b></p>
                        <p>Visão Ruim: <b>{{ $c->DVRU }}</b></p>
                        @endif
                    <h1>Sem Características definidas</h1>
                @endif
            </section>
        </section>
    </main>
@endsection