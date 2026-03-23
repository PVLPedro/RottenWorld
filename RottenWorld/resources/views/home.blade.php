@extends('layouts.app')

@section('content')
    <main class="relative bg-bg-secondary min-h-[calc(100dvh-120px)] p-4 flex flex-col justify-center gap-4">
        <section class="relative flex gap-4 items-center justify-center">
            <section class="bg-bg-primary w-full flex justify-between h-15 p-2 rounded-lg">
                <section class="flex justify-center *:flex *:items-center *:justify-center gap-2 *:gap-2 *:rounded-lg w-120 *:flex-1">
                    <button popovertarget="damage-component" class="bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 19-6-6"/><path d="m5 21-2-2"/><path d="m8 16-4 4"/><path d="M9.5 17.5 21 6V3h-3L6.5 14.5"/></svg>
                        <span>Dano</span>
                    </button>
                    <button popovertarget="heal-component" class="bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m14.479 19.374-.971.939a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5a5.2 5.2 0 0 1-.219 1.49"/><path d="M15 15h6"/><path d="M18 12v6"/></svg>
                        <span>Cura</span>
                    </button>
                    <button popovertarget="health-component" class="bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"/><path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/></svg>
                        <span>Saúde</span>
                    </button>
                </section>
                <section class="flex justify-center *:flex *:items-center *:justify-center gap-2 *:rounded-lg">
                    <span class="min-w-20">Atributo</span>
                    <select name="roll-attribute" id="roll-attribute" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 w-50 rounded-lg">
                        <option value="AFOR">Força</option>
                        <option value="ADES">Destreza</option>
                        <option value="ACON">Constituição</option>
                        <option value="AINT">Inteligência</option>
                        <option value="APER">Percepção</option>
                        <option value="AVON">Força de Vontade</option>
                    </select>
                    <select name="roll-skill" id="roll-skill" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 w-50 rounded-lg">
                        <optgroup label="Outros">
                            <option value="TSEM">Nenhum</option>
                            <option value="TINI">Iniciativa</option>
                            <option value="TMED">Medo</option>
                        </optgroup>
                        <optgroup label="Atributos">
                            <option value="TFOR">Força</option>
                            <option value="TDES">Destreza</option>
                            <option value="TCON">Constituição</option>
                            <option value="TINT">Inteligência</option>
                            <option value="TPER">Percepção</option>
                            <option value="TVON">Força de Vontade</option>
                        </optgroup>
                        <optgroup label="Perícias Físicas">
                            <option value="PAMB">Armas Brancas</option>
                            <option value="PAMF">Armas de Fogo</option>
                            <option value="PACR">Acrobacia</option>
                            <option value="PATL">Atletismo</option>
                            <option value="PBRI">Briga</option>
                            <option value="PESQ">Esquiva</option>
                            <option value="PFUR">Furtividade</option>
                        </optgroup>
                        <optgroup label="Perícias Técnicas">
                            <option value="PART">Artesanato</option>
                            <option value="PCOC">Concentração</option>
                            <option value="PCOD">Condução</option>
                            <option value="PEPL">Exploração</option>
                            <option value="PINV">Investigação</option>
                            <option value="PLAD">Ladinagem</option>
                            <option value="PPRS">Primeiros Socorros</option>
                        </optgroup>
                        <optgroup label="Perícias Intelectuais">
                            <option value="PCAC">Conhec. Acadêmico</option>
                            <option value="PCIN">Conhec. Informático</option>
                            <option value="PCME">Conhec. Médico</option>
                            <option value="PCMA">Conhec. Mental</option>
                            <option value="PCMI">Conhec. Militar</option>
                            <option value="PCPO">Conhec. Popular</option>
                        </optgroup>
                        <optgroup label="Perícias Sociais">
                            <option value="PBLE">Blefe</option>
                            <option value="PCRI">Carisma</option>
                            <option value="PDIP">Diplomacia</option>
                            <option value="PTIM">Intimidação</option>
                            <option value="PTUI">Intuição</option>
                            <option value="PLID">Liderança</option>
                        </optgroup>
                    </select>
                    <span class="min-w-20">Teste</span>
                </section>
                <section class="flex justify-center *:flex *:items-center *:justify-center gap-2 *:gap-2 *:rounded-lg w-120 *:flex-1">
                    <button popovertarget="variants-component" class="bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 10 3 3"/><path d="M6.5 21A3.5 3.5 0 1 0 3 17.5a2.62 2.62 0 0 1-.708 1.792A1 1 0 0 0 3 21z"/><path d="M9.969 17.031 21.378 5.624a1 1 0 0 0-3.002-3.002L6.967 14.031"/></svg>
                        <span>Variantes</span>
                    </button>
                    <button id="roll-btn" class="bg-bg-tertiary hover:bg-bg-tertiary-hover disabled:text-white-muted disabled:bg-bg-secondary disabled:cursor-default cursor-pointer p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="12" height="12" x="2" y="10" rx="2" ry="2"/><path d="m17.92 14 3.5-3.5a2.24 2.24 0 0 0 0-3l-5-4.92a2.24 2.24 0 0 0-3 0L10 6"/><path d="M6 18h.01"/><path d="M10 14h.01"/><path d="M15 6h.01"/><path d="M18 9h.01"/></svg>
                        <span>Rolar</span>
                    </button>
                </section>
            </section>
        </section>
        <section class="relative h-[calc(100dvh-230px)] flex gap-4 flex-1 *:flex-1 *:rounded-lg *:overflow-hidden *:relative list-none">
            <section id="characters-one" data-list="one" class="characters-lists bg-bg-primary flex flex-col h-[calc(100dvh-230px)]">
                <ul class="py-2 bg-highlight-secondary flex items-center justify-center">
                    <span class="text-black text-xl font-bold">Personagens</span>
                </ul>
                <ul class="list-decimal h-[calc(100%-40px)] overflow-y-auto flex flex-col gap-0.5">
                    @forelse ($sheets as $index => $p)
                        <li class="add-character-btn character-item bg-bg-tertiary hover:bg-bg-tertiary-hover flex items-center justify-start *:py-3 *:min-w-10 *:last:justify-center *:first:flex-1 *:first:px-4 hover:*:last:flex" data-name="{{ $p->nome }}" data-type="{{ $p->tipo }}">
                        {{-- <li add-character-btn character-item odd:bg-bg-tertiary-variant even:bg-bg-tertiary hover:bg-bg-secondary-hover flex-1 flex items-center justify-start *:py-3 *:min-w-10 *:first:text-center *:first:font-bold *:nth-[2]:flex-1 *:last:p hover:*:last:flex --}}
                            {{-- <span class="item-order"> {{ $index + 1 }} </span> --}}
                            <span class="item-name"> {{ $p->nome }} </span>
                            <span class="item-icon hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"/><path d="M12 3v18"/></svg>
                            </span>
                        </li>
                    @empty
                        <li>
                            <span>Nenhum Personagem</span>
                        </li>
                    @endforelse
                </ul>
                <ul class="py-2 bg-bg-primary flex justify-center *:flex *:items-center *:justify-center gap-2 border-t-2 border-highlight-secondary">
                    <span>Filtro</span>
                    <select id="filter-list-one" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 max-w-50 rounded-lg">
                        <option value="1">Jogador</option>
                        <option value="2">NPC</option>
                        <option value="3">Putrefato</option>
                    </select>
                    <span id="filtered-list-one" class="min-w-20"></span>
                </ul>
            </section>
            <section id="roll-list-one" class="bg-bg-primary flex flex-col h-[calc(100dvh-230px)]">
                <ul class="py-2 bg-highlight-secondary flex items-center justify-center">
                    <span class="text-black text-xl font-bold">Rolagem</span>
                </ul>
                <ul class="list-decimal h-[calc(100%-40px)] overflow-y-auto flex flex-col gap-0.5"></ul>
            </section>
            <section id="roll-list-two" class="bg-bg-primary flex flex-col h-[calc(100dvh-230px)]">
                <ul class="py-2 bg-highlight-tertiary flex items-center justify-center">
                    <span class="text-black text-xl font-bold">Rolagem</span>
                </ul>
                <ul class="list-decimal h-[calc(100%-40px)] overflow-y-auto flex flex-col gap-0.5"></ul>
            </section>
            <section id="characters-two" data-list="two" class="characters-lists bg-bg-primary flex flex-col h-[calc(100dvh-230px)]">
                <ul class="py-2 bg-highlight-tertiary flex items-center justify-center">
                    <span class="text-black text-xl font-bold">Personagens</span>
                </ul>
                <ul class="list-decimal h-[calc(100%-40px)] overflow-y-auto flex flex-col gap-0.5">
                    @forelse ($sheets as $index => $p)
                        <li class="add-character-btn character-item bg-bg-tertiary hover:bg-bg-tertiary-hover flex items-center justify-start *:py-3 *:min-w-10 *:last:justify-center *:first:flex-1 *:first:px-4 hover:*:last:flex" data-name="{{ $p->nome }}" data-type="{{ $p->tipo }}">
                            {{-- <span class="item-order"> {{ $index + 1 }} </span> --}}
                            <span class="item-name"> {{ $p->nome }} </span>
                            <span class="item-icon hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"/><path d="M12 3v18"/></svg>
                            </span>
                        </li>
                    @empty
                        <li>
                            <span>Nenhum Personagem</span>
                        </li>
                    @endforelse
                </ul>
                <ul class="py-2 bg-bg-primary flex justify-center *:flex *:items-center *:justify-center gap-2 border-t-2 border-highlight-tertiary">
                    <span>Filtro</span>
                    <select id="filter-list-two" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 max-w-50 rounded-lg">
                        <option value="1">Jogador</option>
                        <option value="2">NPC</option>
                        <option value="3">Putrefato</option>
                    </select>
                    <span id="filtered-list-two" class="min-w-20"></span>
                </ul>
            </section>
        </section>
    </main>
@include('components.damage')
@include('components.heal')
@include('components.health')
@include('components.variants')

@endsection

@push('scripts')
    <script>

const filterListOne = document.getElementById('filter-list-one');
const charactersListOne = document.querySelectorAll('#characters-one .character-item');
const filteredListOne = document.getElementById('filtered-list-one');

function applyFilterListOne() {
    const selectedType = filterListOne.value;
    let filteredCount = 0;

    charactersListOne.forEach(item => {
        if (item.dataset.type === selectedType) {
            item.classList.remove('hidden');
            filteredCount++;
        }
        else {
            item.classList.add('hidden');
        }
        filteredListOne.textContent = `Total: ${filteredCount}`;
    });
}

filterListOne.addEventListener('change', applyFilterListOne);
applyFilterListOne();

const filterListTwo = document.getElementById('filter-list-two');
const charactersListTwo = document.querySelectorAll('#characters-two .character-item');
const filteredListTwo = document.getElementById('filtered-list-two');

function applyFilterListTwo() {
    const selectedType = filterListTwo.value;
    let filteredCount = 0;

    charactersListTwo.forEach(item => {
        if (item.dataset.type === selectedType) {
            item.classList.remove('hidden');
            filteredCount++;
        }
        else {
            item.classList.add('hidden');
        }
        filteredListTwo.textContent = `Total: ${filteredCount}`;
    });
}

filterListTwo.addEventListener('change', applyFilterListTwo);
applyFilterListTwo();

const rollListOne = document.querySelector('#roll-list-one ul:nth-child(2)');
const rollListTwo = document.querySelector('#roll-list-two ul:nth-child(2)');
const addCharacterBtn = document.querySelectorAll('.add-character-btn');

const selectAttribute = document.getElementById('roll-attribute');
const selectSkill = document.getElementById('roll-skill');

let sheets = @json($sheets);

function getSheetByName(name) {
    return sheets.find(sheet => sheet.nome === name);
}

function createDiceSpans(count) {
    const fragment = document.createDocumentFragment();

    for (let i = 0; i < count; i++) {
        const spanResult = document.createElement('span');
        spanResult.classList = 'item-result-span';
        spanResult.textContent = '(d20)';
        fragment.appendChild(spanResult);
    }

    return fragment;
}

function updateRolls(event) {
    const characterItem = event.target.closest('.character-item');
    const characterName = characterItem.dataset.name;
    const characterId = characterItem.dataset.id;
    const listTarget = event.target.closest('.characters-lists').dataset.list;

    const templateSvg = document.createElement('img');
    templateSvg.setAttribute('src', '/svgs/minus.svg');

    const templateSpanIcon = document.createElement('span');
    const templateSpanModifier = document.createElement('span');
    const templateSpanBestResult = document.createElement('span');
    const templateSpanName = document.createElement('span');
    const templateSpanResultGroup = document.createElement('span');
    const templateLi = document.createElement('li');

    templateSpanBestResult.classList = 'best-result';

    templateSpanModifier.classList = 'item-modifier flex-1 text-left';
    templateSpanModifier.textContent = '(--)';
    templateSpanModifier.appendChild(templateSpanBestResult);
    
    templateSpanIcon.classList = 'item-icon hidden';
    templateSpanIcon.appendChild(templateSvg);
    
    templateSpanName.classList = 'item-name flex justify-between gap-2';
    templateSpanName.textContent = characterName;
    
    templateSpanName.appendChild(templateSpanModifier);
    templateSpanName.appendChild(templateSpanIcon);

    templateSpanResultGroup.classList = 'item-result-group flex gap-2 *:min-w-12 *:text-center';

    templateLi.classList = 'character-roll remove-character-btn bg-bg-tertiary hover:bg-bg-tertiary-hover flex flex-col justify-center p-3 gap-2 hover:*:first:*:last:flex';
    templateLi.dataset.name = characterName;

    if (characterId) {
        templateLi.dataset.id = characterId;
    }

    templateLi.append(templateSpanName, templateSpanResultGroup);

    if (listTarget === 'one') {
        rollListOne.appendChild(templateLi);
    } else {
        rollListTwo.appendChild(templateLi);
    }

    updateDices();
}

const skillModifiersMap = {
    PAMB: {
        bonus: ['QFDA'],
        penalty: ['DPRE']
    },
    PAMF: {
        bonus: ['QFDA'],
        penalty: ['DPRE', 'DVRU']
    },
    PACR: {
        bonus: ['QARM'],
        penalty: ['DPRE']
    },
    PATL: {
        bonus: ['QGEN'],
        penalty: ['DPRE']
    },
    PBRI: {
        bonus: ['QARM', 'QFDA'],
        penalty: ['DPCR', 'DPRE']
    },
    PESQ: {
        bonus: ['QBRX'],
        penalty: ['DPRE']
    },
    PFUR: {
        bonus: ['QTRA', 'QMAL'],
        penalty: ['DPRE', 'DIRR']
    },
    PART: {
        bonus: ['QGEL', 'QADA'],
        penalty: ['DTDA']
    },
    PCOC: {
        bonus: ['QTRA', 'QADA'],
        penalty: ['DPSI', 'DTDA']
    },
    PCOD: {
        bonus: ['QADA', 'QCNH'],
        penalty: ['DTDA', 'DIRR']
    },
    PEPL: {
        bonus: ['QADA', 'QMMF'],
        penalty: ['DTDA']
    },
    PINV: {
        bonus: ['QCAS', 'QADA', 'QMMF'],
        penalty: ['DTDA']
    },
    PLAD: {
        bonus: ['QCAS', 'QADA', 'QMAL'],
        penalty: ['DTDA']
    },
    PPRS: {
        bonus: ['QADA'],
        penalty: ['DMDS', 'DTDA']
    },
    PCAC: {
        bonus: ['QGEL'],
        penalty: ['DPRO']
    },
    PCIN: {
        bonus: ['QGEL'],
        penalty: ['DPRO']
    },
    PCME: {
        bonus: ['QGEL'],
        penalty: ['DMDS', 'DPRO']
    },
    PCMA: {
        bonus: ['QGEL'],
        penalty: ['DPRO']
    },
    PCMI: {
        bonus: ['QGEL'],
        penalty: ['DPRO']
    },
    PCPO: {
        bonus: ['QGEL'],
        penalty: ['DPRO']
    },
    PBLE: {
        bonus: ['QJDP', 'QLAB'],
        penalty: ['DCRE', 'DPLH']
    },
    PCRI: {
        bonus: ['QBEL', 'DPLH'],
        penalty: ['DFEI', 'DCRE']
    },
    PDIP: {
        bonus: ['QLAB'],
        penalty: ['DANT', 'DCRE', 'DSNO', 'DPLH']
    },
    PTIM: {
        bonus: ['DFEI'],
        penalty: ['DCRE']
    },
    PTUI: {
        bonus: ['QSEA', 'QJDP'],
        penalty: ['DCRE', 'DSNO']
    },
    PLID: {
        bonus: ['QBEL'],
        penalty: ['DANT', 'DFEI', 'DCRE']
    },

    TFOR: {
        bonus: ['AFOR'],
        penalty: ['']
    },
    TDES: {
        bonus: ['ADES', 'QCNH'],
        penalty: ['']
    },
    TCON: {
        bonus: ['ACON', 'QDDM'],
        penalty: ['DPCR']
    },
    TINT: {
        bonus: ['AINT'],
        penalty: ['']
    },
    TPER: {
        bonus: ['APER'],
        penalty: ['DVRU']
    },
    TVON: {
        bonus: ['AVON'],
        penalty: ['DCOV', 'DPSI']
    },

    TMED: {
        bonus: ['QCOR'],
        penalty: ['DCOV']
    },
    TINI: {
        bonus: ['QBRX', 'DIRR'],
        penalty: ['']
    }
};

let isAttributeZero = false;

function updateDices() {

    const attribute = selectAttribute.value;
    const skill = selectSkill.value;

    const characterRolls = document.querySelectorAll('.character-roll');

    characterRolls.forEach(item => {

        const characterName = item.dataset.name;

        const resultGroup = item.querySelector('.item-result-group');
        const modifier = item.querySelector('.item-modifier');

        const sheet = getSheetByName(characterName);

        if (!resultGroup || !modifier) return;

        resultGroup.innerHTML = '';

        if (!sheet || !sheet.caracteristicas) {
            modifier.textContent = '(--)';
            return;
        }

        const attributeValue = Number(sheet.caracteristicas?.[attribute] ?? 0);

        let skillValue = 0;
        skillValue = Number(sheet.caracteristicas?.[skill] ?? 0);

        let qualityBonus = 0;
        let defectPenalty = 0;

        const skillRule = skillModifiersMap[skill];

        if (skillRule) {
            skillRule.bonus.forEach(code => {
                qualityBonus += Number(sheet.caracteristicas?.[code] ?? 0);
            });

            skillRule.penalty.forEach(code => {
                defectPenalty += Number(sheet.caracteristicas?.[code] ?? 0);
            });
        }

        const totalModifier = attributeValue + skillValue + qualityBonus - defectPenalty;

        modifier.textContent = `(Atri: ${attributeValue} | Peri: ${skillValue} | Total: ${2 * skillValue + qualityBonus - defectPenalty})`;

        let diceCount = attributeValue === 0 ? 2 : attributeValue;
        isAttributeZero = attributeValue === 0 ? true : false;

        resultGroup.appendChild(createDiceSpans(diceCount));

    });
}

addCharacterBtn.forEach(btn => {
    btn.addEventListener('click', (event) => {
        updateRolls(event);
    });
});

selectAttribute.addEventListener('input', () => {
    updateDices();
});

selectSkill.addEventListener('input', () => {
    updateDices();
});

rollListOne.addEventListener('click', (event) => {
    if (event.target.closest('.remove-character-btn')) {
        event.target.closest('.character-roll')?.remove();
    }
});

rollListTwo.addEventListener('click', (event) => {
    if (event.target.closest('.remove-character-btn')) {
        event.target.closest('.character-roll')?.remove();
    }
});

const rollBtn = document.getElementById('roll-btn');

rollBtn.addEventListener('click', () => {
    const result = document.querySelectorAll('.item-result-span');

    rollBtn.disabled = true ? result.length : false;

    result.forEach(display => {
        const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

        display.classList.remove('text-green-400');
        display.classList.remove('text-red-400');

        rollDice();
        
        async function rollDice() {
            const finalResult = Math.floor(Math.random() * 20) + 1;
            display.dataset.rollValue = finalResult;

            const totalRolls = 10;

            for (let i = 0; i < totalRolls; i++) {
                display.innerText = `(${Math.floor(Math.random() * 20) + 1})`;

                await sleep(50 + i * 20); 
            }
            
            rollBtn.disabled = false;

            display.textContent = `(${finalResult})`;
            if (finalResult == 20) {
                display.classList.add('text-green-400');
            }
            if (finalResult == 1) {
                display.classList.add('text-red-400');
            }
        };
    });
});


    </script>
@endpush