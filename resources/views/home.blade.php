@extends('layouts.app')

@section('content')
    <main class="relative bg-bg-secondary min-h-[calc(100dvh-128px)] p-1 lg:p-4 flex flex-col justify-center gap-4">
        <section class="relative min-h-[calc(100dvh-128px)] sm:h-[calc(100dvh-128px)] lg:min-h-[calc(100dvh-152px)] lg:h-[calc(100dvh-152px)] flex gap-2 flex-col sm:grid sm:grid-cols-2 lg:flex lg:flex-row lg:*:flex-1 *:rounded-lg *:overflow-hidden *:relative list-none">
            <section id="characters-one" data-list="one" class="characters-lists h-75 sm:h-auto bg-bg-primary flex flex-col">
                <ul class="py-2 bg-highlight-secondary flex items-center justify-center">
                    <span class="text-black text-xl font-bold">Personagens</span>
                </ul>
                <ul class="list-decimal grow overflow-y-auto flex flex-col gap-0.5">
                    @forelse ($sheets as $index => $s)
                        @php
                            @include(resource_path('views/partials/caracteristicas.php'));
                        @endphp
                        <li class="add-character-btn character-item bg-bg-tertiary hover:bg-bg-tertiary-hover flex items-center justify-start *:py-3 *:min-w-10 *:last:justify-center *:first:flex-1 *:first:px-4 hover:*:last:flex"
                            data-name="{{ $s->nome }}"
                            data-sheetid="{{ $s->sheet_id }}"
                            data-type="{{ $s->tipo }}"

                            data-afor="{{ $AFOR }}"
                            data-ades="{{ $ADES }}"
                            data-acon="{{ $ACON }}"
                            data-aint="{{ $AINT }}"
                            data-aper="{{ $APER }}"
                            data-avon="{{ $AVON }}"

                            data-pamb="{{ $PAMB }}"
                            data-pamf="{{ $PAMF }}"
                            data-pacr="{{ $PACR }}"
                            data-patl="{{ $PATL }}"
                            data-pbri="{{ $PBRI }}"
                            data-pesq="{{ $PESQ }}"
                            data-pfur="{{ $PFUR }}"

                            data-part="{{ $PART }}"
                            data-pcoc="{{ $PCOC }}"
                            data-pcod="{{ $PCOD }}"
                            data-pepl="{{ $PEPL }}"
                            data-pinv="{{ $PINV }}"
                            data-plad="{{ $PLAD }}"
                            data-pprs="{{ $PPRS }}"

                            data-pcac="{{ $PCAC }}"
                            data-pcin="{{ $PCIN }}"
                            data-pcme="{{ $PCME }}"
                            data-pcma="{{ $PCMA }}"
                            data-pcmi="{{ $PCMI }}"
                            data-pcpo="{{ $PCPO }}"

                            data-pble="{{ $PBLE }}"
                            data-pcri="{{ $PCRI }}"
                            data-pdip="{{ $PDIP }}"
                            data-ptim="{{ $PTIM }}"
                            data-ptui="{{ $PTUI }}"
                            data-plid="{{ $PLID }}"

                            data-qarm="{{ $QARM }}"
                            data-qbel="{{ $QBEL }}"
                            data-qcor="{{ $QCOR }}"
                            data-qcas="{{ $QCAS }}"
                            data-qddm="{{ $QDDM }}"
                            data-qbrx="{{ $QBRX }}"
                            data-qgel="{{ $QGEL }}"
                            data-qgen="{{ $QGEN }}"
                            data-qtra="{{ $QTRA }}"
                            data-qsea="{{ $QSEA }}"
                            data-qada="{{ $QADA }}"
                            data-qfda="{{ $QFDA }}"
                            data-qjdp="{{ $QJDP }}"
                            data-qlab="{{ $QLAB }}"
                            data-qmal="{{ $QMAL }}"
                            data-qcnh="{{ $QCNH }}"
                            data-qmmf="{{ $QMMF }}"

                            data-dant="{{ $DANT }}"
                            data-daza="{{ $DAZA }}"
                            data-dfei="{{ $DFEI }}"
                            data-dpcr="{{ $DPCR }}"
                            data-dcov="{{ $DCOV }}"
                            data-dcre="{{ $DCRE }}"
                            data-dmds="{{ $DMDS }}"
                            data-dpsi="{{ $DPSI }}"
                            data-dpse="{{ $DPSE }}"
                            data-dpre="{{ $DPRE }}"
                            data-dpro="{{ $DPRO }}"
                            data-dtda="{{ $DTDA }}"
                            data-dirr="{{ $DIRR }}"
                            data-dsno="{{ $DSNO }}"
                            data-dplh="{{ $DPLH }}"
                            data-dvru="{{ $DVRU }}"
                            >
                            <span class="item-name"> {{ $s->nome }} </span>
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
            <section id="roll-list-one" class="h-50 sm:h-auto bg-bg-primary flex flex-col">
                <ul class="py-2 bg-highlight-secondary flex items-center justify-center">
                    <span class="text-black text-xl font-bold">Rolagem</span>
                </ul>
                <ul class="list-decimal overflow-y-auto flex flex-col gap-0.5"></ul>
            </section>
            <section class="overflow-y-auto col-span-2 bg-bg-primary w-full flex flex-col gap-2 p-2 rounded-lg **:[button]:flex **:[button]:justify-center **:[button]:gap-4 **:[button]:rounded-lg">
                <section class="grid grid-cols-2 gap-2">
                    <span class="flex justify-center items-center font-medium min-w-20">Atributo</span>
                    <select name="roll-attribute" id="roll-attribute" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 rounded-lg">
                        <option value="AFOR">Força</option>
                        <option value="ADES">Destreza</option>
                        <option value="ACON">Constituição</option>
                        <option value="AINT">Inteligência</option>
                        <option value="APER">Percepção</option>
                        <option value="AVON">Força de Vontade</option>
                    </select>
                    <span class="flex justify-center items-center font-medium min-w-20">Teste</span>
                    <select name="roll-skill" id="roll-skill" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 rounded-lg">
                        <optgroup label="Outros">
                            <option value="TSEM">Nenhum</option>
                            <option value="TINI">Iniciativa</option>
                            <option value="TMED">Medo</option>
                        </optgroup>
                        <optgroup label="Atributos">
                            <option value="AFOR">Força</option>
                            <option value="ADES">Destreza</option>
                            <option value="ACON">Constituição</option>
                            <option value="AINT">Inteligência</option>
                            <option value="APER">Percepção</option>
                            <option value="AVON">Força de Vontade</option>
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
                    <button id="roll-btn" class="col-span-2 bg-bg-tertiary hover:bg-bg-tertiary-hover disabled:text-white-muted disabled:bg-bg-secondary disabled:cursor-default cursor-pointer p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="12" height="12" x="2" y="10" rx="2" ry="2"/><path d="m17.92 14 3.5-3.5a2.24 2.24 0 0 0 0-3l-5-4.92a2.24 2.24 0 0 0-3 0L10 6"/><path d="M6 18h.01"/><path d="M10 14h.01"/><path d="M15 6h.01"/><path d="M18 9h.01"/></svg>
                        <span>Rolar</span>
                    </button>
                </section>
                <section class="grid grid-cols-2 gap-2">
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
                    <button popovertarget="inventory-component" class="bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z"/><path d="M8 10h8"/><path d="M8 18h8"/><path d="M8 22v-6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v6"/><path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/></svg>
                        <span>Inventário</span>
                    </button>
                </section>
                <button popovertarget="variants-component" class="bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 10 3 3"/><path d="M6.5 21A3.5 3.5 0 1 0 3 17.5a2.62 2.62 0 0 1-.708 1.792A1 1 0 0 0 3 21z"/><path d="M9.969 17.031 21.378 5.624a1 1 0 0 0-3.002-3.002L6.967 14.031"/></svg>
                    <span>Variantes</span>
                </button>
            </section>
        </section>
    </main>
@include('components.damage')
@include('components.heal')
@include('components.health')
@include('components.inventory')
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

const rollListOne = document.querySelector('#roll-list-one ul:nth-child(2)');
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
    characterItem.dataset.attribute = 0;
    const characterName = characterItem.dataset.name;
    const characterId = characterItem.dataset.sheetid;
    const listTarget = event.target.closest('.characters-lists').dataset.list;

    const templateSvg = document.createElement('img');
    templateSvg.setAttribute('src', '/svg/minus.svg');

    const templateSpanIcon = document.createElement('span');
    templateSpanIcon.classList = 'item-icon hidden';
    templateSpanIcon.appendChild(templateSvg);

    const templateSpanBestResult = document.createElement('span');
    templateSpanBestResult.classList = 'best-result';

    const templateSpanModifier = document.createElement('span');
    templateSpanModifier.classList = 'item-modifier flex-1 text-left';
    templateSpanModifier.textContent = '(--)';

    const templateSpanName = document.createElement('span');
    templateSpanName.classList = 'item-name flex justify-between gap-2';
    templateSpanName.textContent = characterName;
    templateSpanName.appendChild(templateSpanIcon);

    const templateSpanResultGroup = document.createElement('span');
    templateSpanResultGroup.id = characterId;
    templateSpanResultGroup.classList = 'item-result-group flex gap-2 *:min-w-12 *:text-center';

    const templateLi = document.createElement('li');
    templateLi.classList = 'character-roll remove-character-btn bg-bg-tertiary hover:bg-bg-tertiary-hover flex flex-col justify-center p-3 gap-2 hover:*:first:*:last:flex';
    templateLi.dataset.name = characterName;

    if (characterId) {
        templateLi.dataset.id = characterId;
    }

    templateLi.append(templateSpanName, templateSpanModifier, templateSpanResultGroup, templateSpanBestResult);

    rollListOne.appendChild(templateLi);

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
        bonus: ['AFOR', 'AFOR'],
        penalty: ['']
    },
    TDES: {
        bonus: ['ADES', 'ADES', 'QCNH'],
        penalty: ['']
    },
    TCON: {
        bonus: ['ACON', 'ACON', 'QDDM'],
        penalty: ['DPCR']
    },
    TINT: {
        bonus: ['AINT', 'AINT'],
        penalty: ['']
    },
    TPER: {
        bonus: ['APER', 'APER'],
        penalty: ['DVRU']
    },
    TVON: {
        bonus: ['AVON', 'AVON'],
        penalty: ['DCOV', 'DPSI']
    },

    TMED: {
        bonus: ['QCOR'],
        penalty: ['DCOV']
    },
    TINI: {
        bonus: ['ADES', 'QBRX', 'DIRR', 'QCOR'],
        penalty: ['']
    },
};

function updateDices() {

    const attribute = selectAttribute.value;
    const skill = selectSkill.value;

    const characterRolls = document.querySelectorAll('.character-roll');

    characterRolls.forEach(item => {

        const bestResult = item.querySelector('.best-result');

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
        item.dataset.attribute = attributeValue;

        let skillValue = 0;
        skillValue = Number(sheet.caracteristicas?.[skill] ?? 0);

        let qualityBonus = 0;
        let defectPenalty = 0;

        const skillRule = skillModifiersMap[skill];

        if (skillRule) {
            skillRule.bonus.forEach(code => {
                if (code == 'QCOR') {
                    qualityBonus += 3;
                }
                else if (code == 'QARM') {
                    qualityBonus += 3;
                }
                else {
                    qualityBonus += Number(sheet.caracteristicas?.[code] ?? 0);
                }
            });

            skillRule.penalty.forEach(code => {
                defectPenalty += Number(sheet.caracteristicas?.[code] ?? 0);
            });
        }

        const totalModifier = 2 * skillValue + qualityBonus - defectPenalty;
        bestResult.textContent = `Resultado Final: (--)`;
        bestResult.value = totalModifier;

        modifier.textContent = `(Atri: Lvl ${attributeValue} | Perí: Lvl ${skillValue} | Total: ${totalModifier})`;

        let diceCount = attributeValue === 0 ? 2 : attributeValue;

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

const rollBtn = document.getElementById('roll-btn');

rollBtn.addEventListener('click', async () => {
    const result = document.querySelectorAll('.item-result-span');
    
    rollBtn.disabled = true;

    const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

    async function rollDice(display) {

        const finalResult = Math.floor(Math.random() * 20) + 1;

        const totalRolls = 10;

        for (let i = 0; i < totalRolls; i++) {
            display.innerText = `(${Math.floor(Math.random() * 20) + 1})`;

            await sleep(50 + i * 20); 
        }

        if (finalResult == 20) {
            display.classList.add('text-green-400');
        }
        if (finalResult == 1) {
            display.classList.add('text-red-400');
        }
        
        display.textContent = `(${finalResult})`;
    }

    const rollingPromises = Array.from(result).map(display => {
        display.classList.remove('text-green-400', 'text-red-400');
        return rollDice(display);
    });

    await Promise.all(rollingPromises);

    updateFinalResult();
});

function updateFinalResult() {
    rollBtn.disabled = false;

    const characterRolls = document.querySelectorAll('.character-roll');

    characterRolls.forEach(item => {
        const bestResult = item.querySelector('.best-result');
        let bestValue = bestResult.value;

        const resultGroup = item.querySelector('.item-result-group');
        const dicesResult = (resultGroup.textContent.match(/\d+/g) || []).map(Number);

        let maxResult = Math.max(...dicesResult);
        let minResult = Math.min(...dicesResult);
        console.log(dicesResult, maxResult, minResult);
        

        let attribute = item.dataset.attribute;

        if (attribute > 0) {
            bestResult.textContent = `Resultado Final: ${bestValue + maxResult}`;
        }
        else {
            bestResult.textContent = `Resultado Final: ${bestValue + minResult}`;
        }

    });
}


    </script>
@endpush