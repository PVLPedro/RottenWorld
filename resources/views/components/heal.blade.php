<section id="heal-component" popover class="relative top-1/2 left-1/2 -translate-1/2 w-250 min-h-100 p-4 flex-col items-center gap-10 bg-bg-primary rounded-lg border-2 border-border-primary text-white **:[svg]:size-6">
    <x-close-btn target="heal-component"/>
    <section class="flex py-2 gap-2 justify-center items-center">
        <x-lucide-heart-plus />
        <span class="text-lg font-medium">Cura</span>
    </section>
    <section class="grid grid-cols-2 gap-4 justify-center justify-items-center items-center content-center w-full auto-rows-fr *:w-full p-4 *:p-2">
        <section class="col-start-1 row-span-6">
            <section class="flex flex-col justify-center items-center gap-2">
                <span>Personagens</span>
                <ul id="characters-heal" class="w-full h-100 overflow-y-auto flex flex-col p-2 gap-0.5 border-2 border-highlight-secondary rounded-lg">
                    @forelse ($sheets as $index => $s)
                        @php
                            @include(resource_path('views/partials/caracteristicas.php'));
                        @endphp
                        <li class="heal-item bg-bg-tertiary hover:bg-bg-tertiary-hover flex items-center justify-start *:p-2 aria-selected:bg-bg-tertiary-hover"
                            data-name="{{ $s->nome }}"
                            data-type="{{ $s->tipo }}"
                            data-healid="{{ $s->id_sheet }}"
                            data-acon="{{ $ACON }}"
                            data-pcoc="{{ $PCOC }}"
                            data-pprs="{{ $PPRS }}"
                            data-pcme="{{ $PCME }}"
                            data-qgen="{{ $QGEN }}"
                            data-qtra="{{ $QTRA }}"
                            aria-selected="false"
                            >
                            <span class="grow min-w-10"> {{ $s->nome }} </span>
                        </li>
                    @empty
                        <li>
                            <span>Nenhum Personagem</span>
                        </li>
                    @endforelse
                </ul>
            </section>
        </section>
        <section class="col-start-1 row-start-7 bg-bg-primary flex justify-center *:flex *:items-center *:justify-center gap-2">
            <span>Filtro</span>
            <select id="filter-list-heal" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 max-w-50 rounded-lg">
                <option value="1">Jogador</option>
                <option value="2">NPC</option>
                <option value="3">Putrefato</option>
            </select>
            <span id="filtered-list-heal" class="min-w-20"></span>
        </section>
        <section class="col-start-2 row-start-1 flex items-center gap-2">
            <span>Personagem</span>
            <span id="heal-display-name" class="flex items-center p-2 gap-2 flex-1 bg-bg-tertiary rounded-lg">Nome</span>
        </section>
        <section class="col-start-2 row-start-2 flex justify-center gap-2 *:flex-1 *:p-2 *:bg-bg-tertiary *:rounded-lg *:text-center">
            <span id="display-acon" class="display-heal-skills">ACON 0</span>
            <span id="display-pcoc" class="display-heal-skills">PCOC 0</span>
            <span id="display-pprs" class="display-heal-skills">PPRS 0</span>
            <span id="display-pcme" class="display-heal-skills">PCME 0</span>
            <span id="display-qgen" class="display-heal-skills">QGEN 0</span>
            <span id="display-qtra" class="display-heal-skills">QTRA 0</span>
            <span id="display-rotten" class="display-heal-skills hidden">PODRE -2</span>
        </section>
        <section class="col-start-2 row-start-3">
            <section class="flex justify-center items-center gap-2">
                <span>Ataque</span>
                <select name="heal-dices" id="heal-select" class="flex-1 bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 rounded-lg">
                    <option value="descansoLeve">Descanso Leve</option>
                    <option value="descansoProfundo">Descanso Profundo</option>
                    <option value="alimentoPodre">Alimento Podre</option>
                    <option value="alimentoSaudavel">Alimento Saudável</option>
                    <option value="analgesico">Analgésico</option>
                    <option value="bandagem">Bandagem</option>
                    <option value="spraySelador">Spray Selador</option>
                    <option value="ervaMedicinal">Erva Medicinal</option>
                    <option value="curaInjetavel">Cura Injetável</option>
                    <option value="kitMedico">Kit Médico</option>
                    <option value="custom">Personalizado</option>
                </select>
            </section>
        </section>
        <section class="col-start-2 row-start-4 flex justify-center gap-2">
            <section>
                <span>Dados</span>
                <input id="heal-dices-count" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" value="0" disabled/>
            </section>
            <section>
                <span>Lados</span>
                <input id="heal-dices-faces" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" value="0" disabled/>
            </section>
            <section>
                <span>Bônus</span>
                <input id="heal-dices-bonus" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" value="0" disabled/>
            </section>
        </section>
        <section class="col-start-2 row-start-5 flex flex-wrap justify-center gap-2 *:bg-bg-secondary *:p-2 *:rounded-lg *:text-center *:block *:w-15.5"
            id="heal-result-display"
        >
        </section>
        <section class="col-start-2 row-start-6 flex items-center justify-center gap-4 *:cursor-pointer">
            <input type="checkbox" id="double-heal-input" class=" appearance-none size-14 border-2 border-bg-secondary rounded-lg bg-bg-tertiary hover:bg-bg-tertiary-hover checked:hover:bg-highlight-tertiary checked:bg-highlight-tertiary checked:bg-[url('/public/svg/check.svg')] checked:bg-center checked:border-bg-secondary-hover">
            <label for="double-heal-input">Crítico</label>
        </section>
        <section class="col-start-2 row-start-7 flex gap-4">
            <button id="roll-heal-btn" class="flex justify-center items-center p-2 gap-2 w-full bg-bg-tertiary hover:bg-bg-tertiary-hover disabled:text-white-muted disabled:bg-bg-secondary rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="12" height="12" x="2" y="10" rx="2" ry="2"/><path d="m17.92 14 3.5-3.5a2.24 2.24 0 0 0 0-3l-5-4.92a2.24 2.24 0 0 0-3 0L10 6"/><path d="M6 18h.01"/><path d="M10 14h.01"/><path d="M15 6h.01"/><path d="M18 9h.01"/></svg>
                <span>Rolar</span>
            </button>
            <span id="result-heal-total" class="block bg-bg-tertiary p-2 w-full rounded-lg text-center">Total</span>
        </section>
    </section>
</section>

@push('scripts')
<script>

let healMap = {
    descansoLeve: {
        count: '1',
        faces: '4',
        bonus: ['acon', 'pcoc']
    },
    descansoProfundo: {
        count: '1',
        faces: '8',
        bonus: ['acon', 'pcoc', 'qtra']
    },
    alimentoPodre: {
        count: '1',
        faces: '4',
        bonus: ['rotten']
    },
    alimentoSaudavel: {
        count: '2',
        faces: '4',
        bonus: ['acon']
    },
    analgesico: {
        count: '2',
        faces: '6',
        bonus: ['acon', 'pcoc']
    },
    bandagem: {
        count: '3',
        faces: '4',
        bonus: ['pcoc', 'pprs']
    },
    spraySelador: {
        count: '1',
        faces: '12',
        bonus: ['pcoc', 'pprs']
    },
    ervaMedicinal: {
        count: '3',
        faces: '4',
        bonus: ['pprs', 'pcme']
    },
    curaInjetavel: {
        count: '3',
        faces: '6',
        bonus: ['pprs', 'pcme']
    },
    kitMedico: {
        count: '4',
        faces: '6',
        bonus: ['pcoc', 'pprs', 'pcme']
    },
}

const healResultDisplay = document.getElementById('heal-result-display');

const filterListHeal = document.getElementById('filter-list-heal');
const charactersListHeal = document.querySelectorAll('#characters-heal .heal-item');
const filteredListHeal = document.getElementById('filtered-list-heal');

function applyFilterListHeal() {
    const selectedType = filterListHeal.value;
    let filteredCount = 0;

    charactersListHeal.forEach(item => {
        if (item.dataset.type === selectedType) {
            item.classList.remove('hidden');
            filteredCount++;
        }
        else {
            item.classList.add('hidden');
        }
        filteredListHeal.textContent = `Total: ${filteredCount}`;
    });
}

filterListHeal.addEventListener('change', applyFilterListHeal);
applyFilterListHeal();

const healDisplayName = document.getElementById('heal-display-name');
const displayACON = document.getElementById('display-acon');
const displayPCOC = document.getElementById('display-pcoc');
const displayPPRS = document.getElementById('display-pprs');
const displayPCME = document.getElementById('display-pcme');
const displayQGEN = document.getElementById('display-qgen');
const displayQTRA = document.getElementById('display-qtra');
const displayROTTEN = document.getElementById('display-rotten');

const rollHealBtn = document.getElementById('roll-heal-btn');
rollHealBtn.disabled = true;

const healItens = document.querySelectorAll('[data-healid]');

healItens.forEach(item => {
    item.addEventListener('click', () => {
        healItens.forEach(el => el.setAttribute('aria-selected', 'false'));
        item.setAttribute('aria-selected', 'true');

        selectedHealId = item.dataset.healid;

        healDisplayName.textContent = item.dataset.name;

        displayACON.textContent = `ACON ${item.dataset.acon}`;
        displayPCOC.textContent = `PCOC ${item.dataset.pcoc}`;
        displayPPRS.textContent = `PPRS ${item.dataset.pprs}`;
        displayPCME.textContent = `PCME ${item.dataset.pcme}`;
        displayQGEN.textContent = `QGEN ${item.dataset.qgen}`;
        displayQTRA.textContent = `QTRA ${item.dataset.qtra}`;

        updateHeal();

        rollHealBtn.disabled = false;
    })
})

let healCount = 0;
let healFaces = 0;
let healBonus = 0;

const healDicesCount = document.getElementById('heal-dices-count');
const healDicesFaces = document.getElementById('heal-dices-faces');
const healDicesBonus = document.getElementById('heal-dices-bonus');

const healSelect = document.getElementById('heal-select');
healSelect.addEventListener('change', updateHeal);

updateHeal();

function updateHeal() {
    let healType = healMap[healSelect.value];
    displayROTTEN.classList.add('hidden');

    healDicesCount.disabled = true;
    healDicesFaces.disabled = true;
    healDicesBonus.disabled = true;

    if (healSelect.value == 'custom') {  
        healDicesCount.disabled = false;
        healDicesFaces.disabled = false;
        healDicesBonus.disabled = false;
    }
    else {
        healCount = healType.count;
        healFaces = healType.faces;
        healBonus = 0;

        let displaySkills = document.querySelectorAll('.display-heal-skills');
        displaySkills.forEach(d => {
            d.classList.add('hidden');
        })

        healType.bonus.forEach(bonus => {
            let value = 0;

            if (bonus == 'rotten') {
                value = -2;
                displayROTTEN.classList.remove('hidden');
            }
            else {
                let display = document.getElementById(`display-${bonus}`);
                value = parseInt(display.textContent.replace(/\D/g, ""), 10) -1;

                if (value < 0) value = 0

                display.classList.remove('hidden');
            }

            healBonus += value;
            
        });

        healDicesCount.value = healCount;
        healDicesFaces.value = healFaces;
        healDicesBonus.value = healBonus;

        healResultDisplay.append(updateResultHealDisplay(healCount, healFaces));
    }
}

healDicesCount.addEventListener('input', () => {
    healResultDisplay.append(updateResultHealDisplay(healDicesCount.value, healDicesFaces.value))
})
healDicesFaces.addEventListener('input', () => {
    healResultDisplay.append(updateResultHealDisplay(healDicesCount.value, healDicesFaces.value))
})

function updateResultHealDisplay(healCount, healFaces) {
    healResultDisplay.textContent = null;

    const fragment = document.createDocumentFragment();

    for (let i = 0; i < healCount; i++) {
        const spanResult = document.createElement('span');
        spanResult.classList.add('heal-result-span');
        spanResult.textContent = `(d${healFaces})`;
        fragment.appendChild(spanResult);
    }

    return fragment;
}

const doubleHealInput = document.getElementById('double-heal-input');

const healTotal = document.getElementById('result-heal-total');

rollHealBtn.addEventListener('click', ()=> {
    const result = document.querySelectorAll('.heal-result-span');

    rollHealBtn.disabled = true ? result.length : false;

    let total = 0 + healBonus;

    result.forEach(display => {
        const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

        display.classList.remove('text-green-400');
        display.classList.remove('text-red-400');

        rollDice();
        
        async function rollDice() {
            const finalResult = Math.floor(Math.random() * healFaces) + 1;

            total += finalResult;

            const totalRolls = 10;

            for (let i = 0; i < totalRolls; i++) {
                display.innerText = `(${Math.floor(Math.random() * healFaces) + 1})`;

                await sleep(50 + i * 20); 
            }

            if (finalResult == healFaces) {
                display.classList.add('text-green-400');
            }
            if (finalResult == 1) {
                display.classList.add('text-red-400');
            }

            display.textContent = `(${finalResult})`;

            updateHealFinalResult(total, finalResult);            
        };
    });
})

function updateHealFinalResult(total, finalResult) {
    rollHealBtn.disabled = false;

    if (doubleHealInput.checked) total += total;
    
    healTotal.textContent = `Total: ${total}`;

    const resultDicesTotal = document.getElementById('result-dices-total');
    if (total < 0) {
        resultDicesTotal.textContent = `${healDisplayName.textContent.split(' ')[0]} recebeu ${total} de dano`;
        return
    }
    resultDicesTotal.textContent = `${healDisplayName.textContent.split(' ')[0]} curou ${total} de saúde`;
}


</script>
@endpush