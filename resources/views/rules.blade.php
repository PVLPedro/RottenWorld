@extends('layouts.app')

@section('content')
    <main class="relative bg-bg-secondary h-[calc(100dvh-120px)] p-4 flex flex-col gap-4 overflow-hidden">
        <section class="relative flex h-full gap-4 p-4 rounded-lg bg-bg-primary overflow-hidden *:relative list-none">
            <section class="flex flex-col gap-2 h-full w-80 overflow-y-auto py-8 pl-12 *:w-full *:duration-100 [&_a]:hover:text-highlight-primary [&_span]:font-semibold [&_span]:text-light-gray [&_span]:mt-4">
                <a class="link" href="#introducao">Introdução</a>
                <span>Regras Gerais</span>
                <a class="link" href="#personagens">Personagens</a>
                <a class="link" href="#testes">Testes</a>
                <a class="link" href="#atributos">Atributos</a>
                <a class="link" href="#secundarios">Atributos Secundários</a>
                <a class="link" href="#pericias">Perícias</a>
                <a class="link" href="#qualidades">Qualidades</a>
                <a class="link" href="#defeitos">Defeitos</a>
                <a class="link" href="#npcs">NPCs</a>
                <a class="link" href="#putrefatos">Putrefatos</a>
                <span>Itens</span>
                <a class="link" href="#itens-gerais">Itens Gerais</a>
                <a class="link" href="#ataques">Armas e Ataques</a>
                <a class="link" href="#armaduras">Armaduras</a>
                <a class="link" href="#cura">Cura</a>
                <span>Combate</span>
                <a class="link" href="#rodadas">Rodadas e Turnos</a>
                <a class="link" href="#acoes">Ações</a>
            </section>
            <section class="flex-1 overflow-y-auto *:w-60/100 *:mx-auto scroll-smooth">
                <x-title> {{ __('rules.introducao.secao') }} </x-title>
                <section class="section" id="introducao">
                    <x-subtitle> {{ __('rules.introducao.subtitulo.um') }} </x-subtitle>
                    @foreach (__('rules.introducao.subtitulo.textoUm.um') as $paragrafo)
                        <x-text> {{ $paragrafo }} </x-text>
                    @endforeach
                </section>
                <x-title> {{ __('rules.regrasGerais.secao') }} </x-title>
                <section class="section" id="personagens">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.um') }} </x-subtitle>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoUm.paragrafoUm') }} </x-text>
                    <x-list>
                        @foreach ( __('rules.regrasGerais.subtitulo.textoUm.listaUm') as $lista)
                            <li> {{ $lista }} </li>
                        @endforeach
                    </x-list>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoUm.paragrafoDois') }} </x-text>
                    <x-list>
                        @foreach ( __('rules.regrasGerais.subtitulo.textoUm.listaDois') as $lista)
                            <li> {{ $lista }} </li>
                        @endforeach
                    </x-list>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoUm.paragrafoTres') }} </x-text>
                </section>
                <section class="section" id="testes">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.dois') }} </x-subtitle>
                    @foreach (__('rules.regrasGerais.subtitulo.textoDois.paragrafoUm') as $paragrafo)
                        <x-text> {{ $paragrafo }} </x-text>
                    @endforeach
                    <x-list>
                        @foreach (__('rules.regrasGerais.subtitulo.textoDois.listaUm') as $item)
                            <li> {{ $item }} </li>
                        @endforeach
                    </x-list>
                </section>
                <section class="section" id="atributos">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.tres') }} </x-subtitle>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoTres') }} </x-text>
                </section>
                <section class="section" id="secundarios">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.quatro') }} </x-subtitle>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoQuatro') }} </x-text>
                </section>
                <section class="section" id="pericias">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.cinco') }} </x-subtitle>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoCinco') }} </x-text>
                </section>
                <section class="section" id="qualidades">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.seis') }} </x-subtitle>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoSeis') }} </x-text>
                </section>
                <section class="section" id="defeitos">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.sete') }} </x-subtitle>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoSete') }} </x-text>
                </section>
                <section class="section" id="npcs">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.oito') }} </x-subtitle>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoOito') }} </x-text>
                </section>
                <section class="section" id="putrefatos">
                    <x-subtitle> {{ __('rules.regrasGerais.subtitulo.nove') }} </x-subtitle>
                    <x-text> {{ __('rules.regrasGerais.subtitulo.textoNove') }} </x-text>
                </section>
                <x-title> {{ __('rules.itens.secao') }} </x-title>
                <section class="section" id="itens-gerais">
                    <x-subtitle> {{ __('rules.itens.corpo.subtituloUm') }} </x-subtitle>
                    <x-text> {{ __('rules.itens.corpo.textoUm') }} </x-text>
                </section>
                <section class="section" id="ataques">
                    <x-subtitle> {{ __('rules.itens.corpo.subtituloDois') }} </x-subtitle>
                    <x-text> {{ __('rules.itens.corpo.textoDois.paragrafoUm') }} </x-text>
                    <x-table>
                        <thead>
                            <tr>
                                <th>Fonte de Dano</th>
                                <th>Dano</th>
                                <th>Atri. / Peri.</th>
                                <th>Alcance</th>
                                <th>Peso Padrão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Golpes Simples</td>
                                <td>1d4</td>
                                <td>Força / Briga</td>
                                <td>Corpo a Corpo</td>
                                <td>Sem Peso</td>
                            </tr>
                            <tr>
                                <td>Golpes Complexos</td>
                                <td>1d6</td>
                                <td>Força / Briga</td>
                                <td>Corpo a Corpo</td>
                                <td>Sem Peso</td>
                            </tr>
                            <tr>
                                <td>Armas Improvisadas</td>
                                <td>Variável</td>
                                <td>variável</td>
                                <td>Variável</td>
                                <td>Variável</td>
                            </tr>
                            <tr>
                                <td>Armas Brancas Leves</td>
                                <td>2d4</td>
                                <td>Força / Armas Brancas</td>
                                <td>Corpo a Corpo</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Armas Brancas Pesadas</td>
                                <td>3d4</td>
                                <td>Força / Armas Brancas</td>
                                <td>Corpo a Corpo</td>
                                <td>Peso 2</td>
                            </tr>
                            <tr>
                                <td>Pistolas / Revolveres</td>
                                <td>3d6</td>
                                <td>Destreza / Armas de Fogo</td>
                                <td>Curto Alcance</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Carabinas</td>
                                <td>3d8</td>
                                <td>Destreza / Armas de Fogo</td>
                                <td>Médio Alcance</td>
                                <td>Peso 2</td>
                            </tr>
                            <tr>
                                <td>Fuzis / Rifles</td>
                                <td>3d8</td>
                                <td>Destreza / Armas de Fogo</td>
                                <td>Longo Alcance</td>
                                <td>Peso 2</td>
                            </tr>
                            <tr>
                                <td>Espingardas</td>
                                <td>4d8</td>
                                <td>Destreza / Armas de Fogo</td>
                                <td>Curto Alcance</td>
                                <td>Peso 3</td>
                            </tr>
                            <tr>
                                <td>(Sub)Metralhadoras</td>
                                <td>5d8</td>
                                <td>Destreza / Armas de Fogo</td>
                                <td>Médio Alcance</td>
                                <td>Peso 4</td>
                            </tr>
                        </tbody>
                    </x-table>
                    <x-text> {!! __('rules.itens.corpo.textoDois.paragrafoDois') !!} </x-text>
                </section>
                <section class="section" id="armaduras">
                    <x-subtitle> {{ __('rules.itens.corpo.subtituloTres') }} </x-subtitle>
                    <x-text> {{ __('rules.itens.corpo.textoTres.paragrafoUm') }} </x-text>
                    <x-table>
                        <thead>
                            <tr>
                                <th>Tipo de Equipamento</th>
                                <th>Resistência</th>
                                <th>Euipável</th>
                                <th>Peso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Roupa</td>
                                <td>0</td>
                                <td>Qualquer</td>
                                <td>Sem Peso</td>
                            </tr>
                            <tr>
                                <td>Roupa de Couro</td>
                                <td>1</td>
                                <td>Qualquer</td>
                                <td>Peso 0</td>
                            </tr>
                            <tr>
                                <td>Colete Simples</td>
                                <td>2</td>
                                <td>Torso</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Colete Reforçado</td>
                                <td>4</td>
                                <td>Torso</td>
                                <td>Peso 2</td>
                            </tr>
                            <tr>
                                <td>Colete Policial</td>
                                <td>6</td>
                                <td>Torso</td>
                                <td>Peso 2</td>
                            </tr>
                            <tr>
                                <td>Colete de Elite</td>
                                <td>8</td>
                                <td>Torso</td>
                                <td>Peso 3</td>
                            </tr>
                            <tr>
                                <td>Colete Militar</td>
                                <td>10</td>
                                <td>Torso</td>
                                <td>Peso 3</td>
                            </tr>
                            <tr>
                                <td>Capacete Simples</td>
                                <td>2</td>
                                <td>Cabeça</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Capacete Reforçado</td>
                                <td>3</td>
                                <td>Cabeça</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Capacete Policial</td>
                                <td>5</td>
                                <td>Cabeça</td>
                                <td>Peso 2</td>
                            </tr>
                            <tr>
                                <td>Capacete de Elite</td>
                                <td>7</td>
                                <td>Cabeça</td>
                                <td>Peso 2</td>
                            </tr>
                            <tr>
                                <td>Capacete Militar</td>
                                <td>9</td>
                                <td>Cabeça</td>
                                <td>Peso 3</td>
                            </tr>
                            <tr>
                                <td>P.B. de Braço Reforçada</td>
                                <td>3</td>
                                <td>Braços</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>P.B. de Braço Policial</td>
                                <td>4</td>
                                <td>Braços</td>
                                <td>Peso 2</td>
                            </tr>
                            <tr>
                                <td>P.B. de Perna Reforçada</td>
                                <td>3</td>
                                <td>Pernas</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>P.B. de Perna Policial</td>
                                <td>4</td>
                                <td>Pernas</td>
                                <td>Peso 2</td>
                            </tr>
                        </tbody>
                    </x-table>
                    <x-text> {!! __('rules.itens.corpo.textoTres.paragrafoDois') !!} </x-text>
                </section>
                <section class="section" id="cura">
                    <x-subtitle> {{ __('rules.itens.corpo.subtituloQuatro') }} </x-subtitle>
                    <x-text> {{ __('rules.itens.corpo.textoQuatro.paragrafoUm') }} </x-text>
                    <x-table>
                        <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Cura Fixa</th>
                                <th>Cura Comum</th>
                                <th>Peso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Descanso Leve</td>
                                <td>1</td>
                                <td>Qualquer</td>
                                <td>Sem Peso</td>
                            </tr>
                            <tr>
                                <td>Descanso Profundo</td>
                                <td>2</td>
                                <td>Qualquer</td>
                                <td>Sem Peso</td>
                            </tr>
                            <tr>
                                <td>Comida e Bebida</td>
                                <td>3</td>
                                <td>1d4</td>
                                <td>Peso 0</td>
                            </tr>
                            <tr>
                                <td>Analgésico</td>
                                <td>5</td>
                                <td>1d6</td>
                                <td>Peso 0</td>
                            </tr>
                            <tr>
                                <td>Bandagem</td>
                                <td>2</td>
                                <td>2d4</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Spray Selador</td>
                                <td>0</td>
                                <td>3d4</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Erva Medicinal</td>
                                <td>1</td>
                                <td>1d4</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Cura Injetável</td>
                                <td>4</td>
                                <td>2d6</td>
                                <td>Peso 1</td>
                            </tr>
                            <tr>
                                <td>Kit Médico</td>
                                <td>4</td>
                                <td>4d4</td>
                                <td>Peso 2</td>
                            </tr>
                        </tbody>
                    </x-table>
                    <x-text> {!! __('rules.itens.corpo.textoQuatro.paragrafoDois') !!} </x-text>
                </section>
            </section>
        </section>
    </main>
@endsection

@push('scripts')

<script>

const sections = document.querySelectorAll('section');
const links = document.querySelectorAll('.link');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const id = entry.target.id;

            links.forEach(link => {
                link.classList.remove('text-highlight-primary');
                
                if (link.getAttribute('href') === `#${id}`) {
                    link.classList.add('text-highlight-primary');
                }
            });
        }
    });
}, {
    threshold: 0.6
});

sections.forEach(section => observer.observe(section));

</script>
    
@endpush