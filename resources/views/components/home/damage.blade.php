<section id="damage-component" popover class="relative top-1/2 left-1/2 -translate-1/2 w-dvw max-w-250 min-h-100 px-1 py-4 md:px-4 md:p-4 flex-col items-center gap-10 bg-bg-primary rounded-lg border-2 border-border-primary text-white **:[svg]:size-6">
    <x-close-btn target="damage-component"/>
    <section class="flex py-2 gap-2 justify-center items-center">
        <x-lucide-sword />
        <span class="text-lg font-medium">Dano</span>
    </section>
    <section class="flex flex-col md:grid md:grid-cols-2 md:p-4 md:gap-4 justify-center justify-items-center items-center content-center w-full *:w-full *:p-2">
        <section class="col-start-1 row-span-6">
            <section class="flex flex-col justify-center items-center gap-2">
                <span>Personagens</span>
                <ul id="characters-damage" class="w-full h-50 md:h-100 overflow-y-auto flex flex-col p-2 gap-0.5 border-2 border-highlight-secondary rounded-lg bg-bg-primary-variant">
                    @forelse ($sheets as $index => $s)
                        @php
                            @include(resource_path('views/partials/features.php'));
                        @endphp
                        <li class="damage-item bg-bg-tertiary hover:bg-bg-tertiary-hover flex items-center justify-start *:p-2 aria-selected:bg-bg-tertiary-hover"
                            data-name="{{ $s->nome }}"
                            data-type="{{ $s->tipo }}"
                            data-damageid="{{ $s->id }}"
                            data-afor="{{ $AFOR }}"
                            data-ades="{{ $ADES }}"
                            data-pamb="{{ $PAMB }}"
                            data-pamf="{{ $PAMF }}"
                            data-pbri="{{ $PBRI }}"
                            data-pcod="{{ $PCOD }}"
                            data-qarm="{{ $QARM }}"
                            aria-selected="false"
                            >
                            <span class="grow min-w-10"> {{ $s->nome }} </span>
                        </li>
                    @empty
                        <li class="p-2 text-center">
                            Nenhum Personagem encontrado
                        </li>
                    @endforelse
                </ul>
            </section>
        </section>
        <section class="col-start-1 row-start-7 bg-bg-primary flex justify-center *:flex *:items-center *:justify-center gap-2">
            <span>Filtro</span>
            <select id="filter-list-damage" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 max-w-50 rounded-lg">
                <option value="1">Jogador</option>
                <option value="2">NPC</option>
                <option value="3">Putrefato</option>
            </select>
            <span id="filtered-list-damage" class="min-w-20"></span>
        </section>
        <section class="col-start-2 row-start-1 flex items-center gap-2">
            <span>Personagem</span>
            <span id="damage-display-name" class="flex items-center p-2 gap-2 flex-1 bg-bg-tertiary rounded-lg">Nome</span>
        </section>
        <section class="col-start-2 row-start-2 flex justify-center gap-2 *:flex-1 *:p-2 *:bg-bg-tertiary *:rounded-lg *:text-center">
            <span id="display-afor" class="display-damage-skills">AFOR 0</span>
            <span id="display-ades" class="display-damage-skills">ADES 0</span>
            <span id="display-pamb" class="display-damage-skills">PAMB 0</span>
            <span id="display-pamf" class="display-damage-skills">PAMF 0</span>
            <span id="display-pbri" class="display-damage-skills">PBRI 0</span>
            <span id="display-pcod" class="display-damage-skills">PCOD 0</span>
            <span id="display-qarm" class="display-damage-skills">QARM 0</span>
        </section>
        <section class="col-start-2 row-start-3">
            <section class="flex justify-center items-center gap-2">
                <span>Ataque</span>
                <select name="damage-dices" id="damage-select" class="flex-1 max-w-8/10 sm:max-w-full bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 rounded-lg">
                    <optgroup label="Danos Diretos">
                        <option value="golpeSimples">Golpe Simples</option>
                        <option value="golpeComplexo">Golpe Complexo</option>
                        <option value="armaBrancaLeve">Arma Branca Leve</option>
                        <option value="armaBrancaPesada">Arma Branca Pesada</option>
                        <option value="pistola">Pistola</option>
                        <option value="revolverCarabina">Revólver e Carabina</option>
                        <option value="fuzil">Fuzil</option>
                        <option value="rifleEspingarda">Rifle e Espingarda</option>
                        <option value="metralhadora">(Sub)Metralhadoras</option>
                        <option value="granada">Lança-Granadas e Granada</option>
                        <option value="lancaChamas">Lança-Chamas</option>
                        <option value="arco">Arco</option>
                        <option value="besta">Besta</option>
                        <option value="atropelamento">Atropelamento</option>
                    </optgroup>
                    <optgroup label="Danos Alheios">
                        <option value="queda">Exaustão</option>
                        <option value="desnutricao">Desnutrição</option>
                        <option value="queimadura">Queimadura</option>
                        <option value="choque">Choque</option>
                        <option value="sufocamento">Sufocamento</option>
                        <option value="intoxicacao">Intoxicação</option>
                        <option value="envenenamento">Envenenamento</option>
                        <option value="armadilha">Armadilha</option>
                        <option value="esmagamento">Esmagamento</option>
                        <option value="explosão">Explosão</option>
                    </optgroup>
                    <optgroup label="Personalizado">
                        <option value="custom">Personalizado</option>
                    </optgroup>
                </select>
            </section>
        </section>
        <section class="col-start-2 row-start-4 scale-90 sm:scale-100 flex justify-center gap-2 *:flex-1 *:flex *:justify-center *:items-center *:gap-2">
            <section>
                <span>Dados</span>
                <input id="damage-dices-count" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" value="0" disabled/>
            </section>
            <section>
                <span>Lados</span>
                <input id="damage-dices-faces" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" value="0" disabled/>
            </section>
            <section>
                <span>Bônus</span>
                <input id="damage-dices-bonus" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" value="0" disabled/>
            </section>
        </section>
        <section class="col-start-2 row-start-5 flex flex-wrap justify-center gap-2 *:bg-bg-secondary *:p-2 *:rounded-lg *:text-center *:block *:w-15.5"
            id="damage-result-display"
        >
        </section>
        <section class="col-start-2 row-start-6 flex items-center justify-center gap-4 *:cursor-pointer">
            <input type="checkbox" id="double-damage-input" class=" appearance-none size-10 border-2 border-bg-secondary rounded-lg bg-bg-tertiary hover:bg-bg-tertiary-hover checked:hover:bg-checked checked:bg-checked bg-no-repeat checked:bg-[url('/public/svg/check.svg')] checked:bg-center checked:border-bg-secondary-hover">
            <label for="double-damage-input">Crítico</label>
        </section>
        <section class="col-start-2 row-start-7 flex gap-4">
            <button id="roll-damage-btn" class="flex justify-center items-center p-2 gap-2 w-full bg-bg-tertiary hover:bg-bg-tertiary-hover disabled:text-white-muted disabled:bg-bg-secondary rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="12" height="12" x="2" y="10" rx="2" ry="2"/><path d="m17.92 14 3.5-3.5a2.24 2.24 0 0 0 0-3l-5-4.92a2.24 2.24 0 0 0-3 0L10 6"/><path d="M6 18h.01"/><path d="M10 14h.01"/><path d="M15 6h.01"/><path d="M18 9h.01"/></svg>
                <span>Rolar</span>
            </button>
            <span id="result-damage-total" class="block bg-bg-tertiary p-2 w-full rounded-lg text-center">Total</span>
        </section>
    </section>
</section>

@push('scripts')
<script>

let damageMap = {
    golpeSimples: {
        count: '1',
        faces: '4',
        bonus: ['afor', 'pbri']
    },
    golpeComplexo: {
        count: '1',
        faces: '6',
        bonus: ['afor', 'pbri', 'qarm']
    },
    armaBrancaLeve: {
        count: '2',
        faces: '4',
        bonus: ['afor', 'ades', 'pamb']
    },
    armaBrancaPesada: {
        count: '3',
        faces: '4',
        bonus: ['afor', 'ades', 'pamb']
    },
    pistola: {
        count: '3',
        faces: '6',
        bonus: ['ades', 'pamf']
    },
    revolverCarabina: {
        count: '4',
        faces: '6',
        bonus: ['ades', 'pamf', 'pamf']
    },
    fuzil: {
        count: '4',
        faces: '8',
        bonus: ['ades', 'pamf', 'pamf']
    },
    rifleEspingarda: {
        count: '4',
        faces: '10',
        bonus: ['ades', 'pamf', 'pamf']
    },
    metralhadoraSub: {
        count: '5',
        faces: '10',
        bonus: ['ades', 'pamf', 'pamf']
    },
    granada: {
        count: '5',
        faces: '12',
        bonus: ['ades', 'pamf']
    },
    lancaChamas: {
        count: '10',
        faces: '6',
        bonus: ['ades', 'pamf']
    },
    arco: {
        count: '4',
        faces: '6',
        bonus: ['ades', 'pamf', 'pamf']
    },
    besta: {
        count: '4',
        faces: '6',
        bonus: ['ades', 'pamf', 'pamf']
    },
    atropelamento: {
        count: '5',
        faces: '12',
        bonus: ['ades', 'pcod']
    },
    exaustao: {
        count: '2',
        faces: '6',
        bonus: ['']
    },
    desnutricao: {
        count: '2',
        faces: '6',
        bonus: ['']
    },
    queimadura: {
        count: '2',
        faces: '8',
        bonus: ['']
    },
    choque: {
        count: '2',
        faces: '8',
        bonus: ['']
    },
    sufocamento: {
        count: '3',
        faces: '6',
        bonus: ['']
    },
    intoxicacao: {
        count: '3',
        faces: '6',
        bonus: ['']
    },
    envenenamento: {
        count: '3',
        faces: '6',
        bonus: ['']
    },
    armadilha: {
        count: '2',
        faces: '10',
        bonus: ['']
    },
    esmagamento: {
        count: '2',
        faces: '12',
        bonus: ['']
    },
    explosão: {
        count: '3',
        faces: '12',
        bonus: ['']
    },
}

const damageResultDisplay = document.getElementById('damage-result-display');

const filterListDamage = document.getElementById('filter-list-damage');
const charactersListDamage = document.querySelectorAll('#characters-damage .damage-item');
const filteredListDamage = document.getElementById('filtered-list-damage');

function applyFilterListDamage() {
    const selectedType = filterListDamage.value;
    let filteredCount = 0;

    charactersListDamage.forEach(item => {
        if (item.dataset.type === selectedType) {
            item.classList.remove('hidden');
            filteredCount++;
        }
        else {
            item.classList.add('hidden');
        }
        filteredListDamage.textContent = `Total: ${filteredCount}`;
    });
}

filterListDamage.addEventListener('change', applyFilterListDamage);
applyFilterListDamage();

const damageDisplayName = document.getElementById('damage-display-name');
const displayAFOR = document.getElementById('display-afor');
const displayADES = document.getElementById('display-ades');
const displayPAMB = document.getElementById('display-pamb');
const displayPAMF = document.getElementById('display-pamf');
const displayPBRI = document.getElementById('display-pbri');
const displayPCOD = document.getElementById('display-pcod');
const displayQARM = document.getElementById('display-qarm');

const rollDamageBtn = document.getElementById('roll-damage-btn');
rollDamageBtn.disabled = true;

const damageItens = document.querySelectorAll('[data-damageid]');

damageItens.forEach(item => {
    item.addEventListener('click', () => {
        damageItens.forEach(el => el.setAttribute('aria-selected', 'false'));
        item.setAttribute('aria-selected', 'true');

        selectedDamageId = item.dataset.damageid;

        damageDisplayName.textContent = item.dataset.name;

        displayAFOR.textContent = `AFOR ${item.dataset.afor}`;
        displayADES.textContent = `ADES ${item.dataset.ades}`;
        displayPAMB.textContent = `PAMB ${item.dataset.pamb}`;
        displayPAMF.textContent = `PAMF ${item.dataset.pamf}`;
        displayPBRI.textContent = `PBRI ${item.dataset.pbri}`;
        displayPCOD.textContent = `PCOD ${item.dataset.pcod}`;
        displayQARM.textContent = `QARM ${item.dataset.qarm}`;

        updateDamage();

        rollDamageBtn.disabled = false;
    })
})

let damageCount = 0;
let damageFaces = 0;
let damageBonus = 0;

const damageDicesCount = document.getElementById('damage-dices-count');
const damageDicesFaces = document.getElementById('damage-dices-faces');
const damageDicesBonus = document.getElementById('damage-dices-bonus');

const doubleDamageInput = document.getElementById('double-damage-input');

const damageSelect = document.getElementById('damage-select');
damageSelect.addEventListener('change', updateDamage);

updateDamage();

function updateDamage() {
    let damageType = damageMap[damageSelect.value];

    damageDicesCount.disabled = true;
    damageDicesFaces.disabled = true;
    damageDicesBonus.disabled = true;

    if (damageSelect.value == 'custom') {  
        damageDicesCount.disabled = false;
        damageDicesFaces.disabled = false;
        damageDicesBonus.disabled = false;

        damageResultDisplay.append(updateResultDamageDisplay(damageDicesCount.value, damageDicesFaces.value));
    }
    else {
        damageCount = damageType.count;
        damageFaces = damageType.faces;
        damageBonus = 0;

        let displaySkills = document.querySelectorAll('.display-damage-skills');
        displaySkills.forEach(d => {
            d.classList.add('hidden');
        })

        damageType.bonus.forEach(bonus => {
            let display = document.getElementById(`display-${bonus}`);
            if (!display) return
            let value = parseInt(display.textContent.replace(/\D/g, ""), 10);
            
            display.classList.remove('hidden');
            
            damageBonus += value;            
        });

        damageDicesCount.value = damageCount;
        damageDicesFaces.value = damageFaces;
        damageDicesBonus.value = damageBonus;

        damageResultDisplay.append(updateResultDamageDisplay(damageCount, damageFaces));
    }
}

damageDicesCount.addEventListener('input', () => {
    updateDamage();
})
damageDicesFaces.addEventListener('input', () => {
    updateDamage();
})
doubleDamageInput.addEventListener('change', () => {
    updateDamage();
})

function updateResultDamageDisplay(damageCount, damageFaces) {
    let doubleDamage = doubleDamageInput.checked ? true : false;    
    if (doubleDamage) damageCount = damageCount * 2;

    damageResultDisplay.textContent = null;

    const fragment = document.createDocumentFragment();

    for (let i = 0; i < damageCount; i++) {
        const spanResult = document.createElement('span');
        spanResult.classList.add('damage-result-span');
        spanResult.textContent = `(d${damageFaces})`;
        fragment.appendChild(spanResult);
    }

    return fragment;
}

const damageTotal = document.getElementById('result-damage-total');

rollDamageBtn.addEventListener('click', async () => {
    const result = document.querySelectorAll('.damage-result-span');

    rollDamageBtn.disabled = true;

    let total = 0 + damageBonus;

    const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

    async function rollDice(display) {

        const finalResult = Math.floor(Math.random() * damageFaces) + 1;

        total += finalResult;

        const totalRolls = 10;

        for (let i = 0; i < totalRolls; i++) {
            display.innerText = `(${Math.floor(Math.random() * damageFaces) + 1})`;

            await sleep(50 + i * 20); 
        }

        if (finalResult == damageFaces) {
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

    updateDamageResult(total);
});

function updateDamageResult(total) {
    rollDamageBtn.disabled = false;
    
    if (total < 0) total = 0;
    
    damageTotal.textContent = `Total: ${total}`;

    const resultDicesTotal = document.getElementById('result-dices-total');
    

    if (damageBonus == 0) {
        resultDicesTotal.textContent = `${damageDisplayName.textContent.split(' ')[0]} recebeu ${total} de dano`;
        return
    }

    resultDicesTotal.textContent = `${damageDisplayName.textContent.split(' ')[0]} causou ${total} de dano`;
}


</script>
@endpush