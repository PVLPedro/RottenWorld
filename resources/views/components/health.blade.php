<section id="health-component" popover class="relative top-1/2 left-1/2 -translate-1/2 w-250 min-h-100 p-4 flex-col items-center gap-10 bg-bg-primary rounded-lg border-2 border-border-primary text-white">
    <x-close-btn target="health-component"/>
    <section class="flex py-2 gap-2 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"/><path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/></svg>
        <span class="text-lg font-medium">Saúde</span>
    </section>
    <section class="grid grid-cols-2 gap-4 justify-center justify-items-center items-center content-center w-full auto-rows-fr *:w-full p-4 *:p-2">
        <section class="col-start-1 row-span-5">
            <section class="flex flex-col justify-center items-center gap-2">
                <span>Personagens</span>
                <ul id="characters-health" class="w-full h-100 overflow-y-auto flex flex-col p-2 gap-0.5 border-2 border-highlight-secondary rounded-lg">
                    @forelse ($sheets as $index => $s)
                        @php
                            @include(resource_path('views/partials/caracteristicas.php'));
                        @endphp
                        <li class="health-item bg-bg-tertiary hover:bg-bg-tertiary-hover flex items-center justify-start *:p-2 aria-selected:bg-bg-tertiary-hover"
                            data-name="{{ $s->nome }}"
                            data-type="{{ $s->tipo }}"
                            data-healthid="{{ $s->id_sheet }}"
                            aria-selected="false"
                            >
                            <span class="flex-1 min-w-10"> {{ $s->nome }} </span>
                            <span class="health-points-item text-center min-w-10" data-max="{{ $ASPV }}">(--)</span>
                            <span class="w-8 text-center">/</span>
                            <span class="text-center min-w-10">{{ $ASPV }}</span>
                        </li>
                    @empty
                        <li>
                            <span>Nenhum Personagem</span>
                        </li>
                    @endforelse
                </ul>
            </section>
        </section>
        <section class="col-start-1 row-start-6 bg-bg-primary flex justify-center *:flex *:items-center *:justify-center gap-2">
            <span>Filtro</span>
            <select id="filter-list-health" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 max-w-50 rounded-lg">
                <option value="1">Jogador</option>
                <option value="2">NPC</option>
                <option value="3">Putrefato</option>
            </select>
            <span id="filtered-list-health" class="min-w-20"></span>
        </section>
        <section class="col-start-2 row-start-1 flex items-center gap-2">
            <span>Personagem</span>
            <span id="health-display-name" class="flex items-center p-2 gap-2 flex-1 bg-bg-tertiary rounded-lg">Nome</span>
        </section>
        <section class="col-start-2 row-start-2 flex items-center gap-2">
            <span>Saúde:</span>
            <span id="health-bar" class="relative overflow-hidden flex items-center h-10 w-full bg-bg-tertiary rounded-lg">
                <span id="health-points-display" class="absolute top-1/2 left-1/2 -translate-1/2 p-2 text-center font-bold font-mono">Saúde</span>
                <span id="health-bar-current" class="h-full w-full duration-300 ease-in-out"></span>
            </span>
        </section>
        <section class="col-start-2 row-start-3 flex gap-2">
            <button id="health-heal-btn" data-action="heal" class="health-btn flex justify-center items-center p-2 gap-2 w-full bg-bg-tertiary hover:bg-bg-tertiary-hover rounded-lg aria-selected:bg-green-600" aria-selected="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m14.479 19.374-.971.939a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5a5.2 5.2 0 0 1-.219 1.49"/><path d="M15 15h6"/><path d="M18 12v6"/></svg>
                <span>Cura</span>
            </button>
            <button id="health-damage-btn" data-action="damage" class="health-btn flex justify-center items-center p-2 gap-2 w-full bg-bg-tertiary hover:bg-bg-tertiary-hover rounded-lg aria-selected:bg-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 19-6-6"/><path d="m5 21-2-2"/><path d="m8 16-4 4"/><path d="M9.5 17.5 21 6V3h-3L6.5 14.5"/></svg>
                <span>Dano</span>
            </button>
        </section>
        <section class="col-start-2 row-start-4 flex items-center gap-2">
            <span>Quantidade</span>
            <input id="health-heal-input" type="number" data-btn="health-heal-btn" placeholder="Cura" class="health-input flex-1 text-white bg-bg-tertiary w-12 p-2 rounded-lg text-center font-bold hidden aria-selected:inline" aria-selected="true"/>
            <input id="health-damage-input" type="number" data-btn="health-damage-btn" placeholder="Dano" class="health-input flex-1 text-white bg-bg-tertiary w-12 p-2 rounded-lg text-center font-bold hidden aria-selected:inline" aria-selected="false"/>
        </section>
        <section class="col-start-2 row-start-5">
            <button id="confirm-health-btn" class="flex justify-center items-center p-2 gap-2 w-full disabled:text-white-muted disabled:bg-bg-secondary bg-bg-tertiary hover:bg-bg-tertiary-hover rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                <span>Confirmar</span>
            </button>
        </section>
        <section class="col-start-2 row-start-6 flex items-center gap-2">
            <span>Resultado Anterior</span>
            <span id="result-dices-total" class="block flex-1 bg-bg-tertiary p-2 rounded-lg text-center">Total</span>
        </section>
    </section>
</section>

@push('scripts')   
<script>

const filterListHealth = document.getElementById('filter-list-health');
const charactersListHealth = document.querySelectorAll('#characters-health .health-item');
const filteredListHealth = document.getElementById('filtered-list-health');

function applyFilterListHealth() {
    const selectedType = filterListHealth.value;
    let filteredCount = 0;

    charactersListHealth.forEach(item => {
        if (item.dataset.type === selectedType) {
            item.classList.remove('hidden');
            filteredCount++;
        }
        else {
            item.classList.add('hidden');
        }
        filteredListHealth.textContent = `Total: ${filteredCount}`;
    });
}

filterListHealth.addEventListener('change', applyFilterListHealth);
applyFilterListHealth();

const healthInputs = document.querySelectorAll('.health-input');
const healthBtns = document.querySelectorAll('.health-btn');

healthBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        healthBtns.forEach(b => b.setAttribute('aria-selected', 'false'));

        btn.setAttribute('aria-selected', 'true');

        let healthBtnId = btn.id;

        healthInputs.forEach(input => {
            input.value = '';
            healthBtnId == input.dataset.btn ? input.setAttribute('aria-selected', 'true') : input.setAttribute('aria-selected', 'false');
        });
    });
});

const healthDisplayName = document.getElementById('health-display-name');
const confirmHealthBtn = document.getElementById('confirm-health-btn');
confirmHealthBtn.disabled = true;
let selectedHealthId = null;

const healthItens = document.querySelectorAll('[data-healthid]');

healthItens.forEach(item => {
    item.addEventListener('click', () => {
        healthItens.forEach(el => el.setAttribute('aria-selected', 'false'));
        item.setAttribute('aria-selected', 'true');

        confirmHealthBtn.disabled = false;
        selectedHealthId = item.dataset.healthid;
        healthDisplayName.textContent = item.dataset.name;

        updateSelectedHealthBar(item);
    });
});

confirmHealthBtn.addEventListener('click', () => {

    let amount = 0;

    healthInputs.forEach(input => {
        if (input.getAttribute('aria-selected') == 'true') {
            amount = parseInt(input.value) || 0;
        }
    });

    if (!selectedHealthId) {
        console.warn('Nenhum personagem selecionado');
        return;
    }

    const selectedBtn = document.querySelector('.health-btn[aria-selected="true"]');

    if (!selectedBtn) return;

    const action = selectedBtn.dataset.action;

    if (action == 'damage') {
        applyDamage(selectedHealthId, amount);
    }
    else if (action == 'heal') {
        applyHeal(selectedHealthId, amount);
    }
});

function getDamageData() {
    return JSON.parse(localStorage.getItem('damageData')) || {};
}

function setDamageData(data) {
    localStorage.setItem('damageData', JSON.stringify(data));
}

function clamp(value, min, max) {
    return Math.max(min, Math.min(max, value));
}

function applyDamage(id, amount) {
    const data = getDamageData();

    const el = document.querySelector(`[data-healthid="${id}"]`);
    const max = parseInt(el.querySelector('.health-points-item').dataset.max) || 0;

    data[id] = (data[id] || 0) + amount;

    data[id] = clamp(data[id], 0, max + 10);

    setDamageData(data);

    const selectedItem = document.querySelector(`[data-healthid="${selectedHealthId}"]`);
    if (selectedItem) {
        updateSelectedHealthBar(selectedItem);
    }

    updateHealthDisplay();
}

function applyHeal(id, amount) {
    const data = getDamageData();

    data[id] = (data[id] || 0) - amount;

    if (data[id] < 0) data[id] = 0;

    setDamageData(data);
    
    const selectedItem = document.querySelector(`[data-healthid="${selectedHealthId}"]`);
    if (selectedItem) {
        updateSelectedHealthBar(selectedItem);
    }

    updateHealthDisplay();
}

function updateHealthDisplay() {
    const data = getDamageData();

    document.querySelectorAll('[data-healthid]').forEach(el => {
        const id = el.dataset.healthid;
        const hpEl = el.querySelector('.health-points-item');

        if (!hpEl) return;

        const max = parseInt(hpEl.dataset.max) || 0;
        const damage = data[id] || 0;

        const current = Math.max(max - damage, -10);

        hpEl.classList.remove('text-yellow-400', 'text-red-400');

        if (current <= 12 && current > 5) {
            hpEl.classList.remove('text-red-400');
            hpEl.classList.add('text-yellow-400');
        }
        else if (current <= 5) {
            hpEl.classList.remove('text-yellow-400');
            hpEl.classList.add('text-red-400');
        }

        hpEl.textContent = `${current}`;
    });
}

updateHealthDisplay();

function updateHealthBar(current, max, isInventory) {
    const barHp = document.getElementById(`${isInventory}health-points-display`);

    if (current < 10 && current > -1) {
        barHp.textContent = `0${current} / ${max}`
    }
    else {
        barHp.textContent = `${current} / ${max}`
    }

    const bar = document.getElementById(`${isInventory}health-bar-current`);

    if (!bar) return;

    let percent = (current / max) * 100;

    percent = Math.max(1, Math.min(percent, 100));

    bar.style.width = percent + '%';

    bar.classList.remove('bg-green-600', 'bg-yellow-600', 'bg-red-600');

    if (current > 12) {
        bar.classList.add('bg-green-600');
    }
    else if (current <= 12 && current > 5) {
        bar.classList.add('bg-yellow-600');
    }
    else if (current <= 5 && current > -10) {
        bar.classList.add('bg-red-600');
    }
    else if (current == -10) {
        bar.classList.add('bg-red-600');
        bar.style.width = 100 + '%';
    }
}

function updateSelectedHealthBar(item) {
    const id = item.dataset.healthid;
    const data = getDamageData();

    const hpEl = item.querySelector('.health-points-item');
    const max = parseInt(hpEl.dataset.max) || 0;
    const damage = data[id] || 0;

    const current = Math.max(max - damage, -10);

    let isInventory = '';

    updateHealthBar(current, max, isInventory);
}

</script>
@endpush