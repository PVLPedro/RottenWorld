<section id="inventory-component" popover class="relative top-1/2 left-1/2 -translate-1/2 w-250 min-h-100 p-4 flex-col items-center gap-10 bg-bg-primary rounded-lg border-2 border-border-primary text-white">
    <x-close-btn target="inventory-component"/>
    <section class="flex py-2 gap-2 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z"/><path d="M8 10h8"/><path d="M8 18h8"/><path d="M8 22v-6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v6"/><path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/></svg>
        <span class="text-lg font-medium">Inventário</span>
    </section>
    <section class="grid grid-cols-2 gap-4 justify-center justify-items-center items-center content-center w-full auto-rows-fr *:w-full p-4 *:p-2">
        <section class="col-start-1 row-span-5">
            <section class="flex flex-col justify-center items-center gap-2">
                <span>Personagens</span>
                <ul id="characters-inventory" class="w-full h-100 overflow-y-auto flex flex-col p-2 gap-0.5 border-2 border-highlight-secondary rounded-lg">
                    @forelse ($sheets as $index => $s)
                        @php
                            @include(resource_path('views/partials/caracteristicas.php'));
                        @endphp
                        <li class="inventory-item bg-bg-tertiary hover:bg-bg-tertiary-hover flex items-center justify-start *:p-2 aria-selected:bg-bg-tertiary-hover"
                            data-name="{{ $s->nome }}"
                            data-type="{{ $s->tipo }}"
                            data-inventoryid="{{ $s->id_sheet }}"
                            aria-selected="false"
                            data-maxhealth="{{ $ASPV }}"
                            data-speed="{{ $ASVE }}"
                            data-load="{{ $ASCC }}"
                            data-resistance="{{ $ASRE }}"
                            >
                            <span class="flex-1 min-w-10"> {{ $s->nome }} </span>
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
            <select id="filter-list-inventory" class="bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 max-w-50 rounded-lg">
                <option value="1">Jogador</option>
                <option value="2">NPC</option>
                <option value="3">Putrefato</option>
            </select>
            <span id="filtered-list-inventory" class="min-w-20"></span>
        </section>
        <section class="col-start-2 row-start-1 flex items-center gap-2">
            <span>Personagem</span>
            <span id="inventory-display-name" class="flex items-center p-2 gap-2 flex-1 bg-bg-tertiary rounded-lg">Nome</span>
        </section>
        <section class="col-start-2 row-start-2 flex items-center gap-2">
            <span>Saúde:</span>
            <span id="inventory-health-bar" class="relative overflow-hidden flex items-center h-10 w-full bg-bg-tertiary rounded-lg">
                <span id="inventory-health-points-display" class="absolute top-1/2 left-1/2 -translate-1/2 p-2 text-center font-bold font-mono">Saúde</span>
                <span id="inventory-health-bar-current" class="h-full w-full duration-300 ease-in-out"></span>
            </span>
        </section>
        <section class="col-start-2 row-start-3 flex items-center gap-2">
            <span>Velocidade</span>
            <span id="inventory-display-speed" class="flex items-center font-bold p-2 gap-2 flex-1 justify-center bg-bg-tertiary rounded-lg">Velo.</span>
            <span>Carga Máxima</span>
            <span id="inventory-display-load" class="flex items-center font-bold p-2 gap-2 flex-1 justify-center bg-bg-tertiary rounded-lg">Carga</span>
        </section>
        <section class="col-start-2 row-start-4 row-span-3 flex flex-col h-full gap-2">
            <span>Inventário</span>
            <textarea id="inventory-display-inventory" class="flex items-center p-2 gap-2 flex-1 bg-bg-tertiary rounded-lg resize-none" placeholder="Inventário"></textarea>
            <span id="inventory-display-total-load">Carga total: </span>
        </section>
    </section>
</section>

@push('scripts')   
<script>

const filterListInventory = document.getElementById('filter-list-inventory');
const charactersListInventory = document.querySelectorAll('#characters-inventory .inventory-item');
const filteredListInventory = document.getElementById('filtered-list-inventory');

function applyFilterListInventory() {
    const selectedType = filterListInventory.value;
    let filteredCount = 0;

    charactersListInventory.forEach(item => {
        if (item.dataset.type === selectedType) {
            item.classList.remove('hidden');
            filteredCount++;
        }
        else {
            item.classList.add('hidden');
        }
        filteredListInventory.textContent = `Total: ${filteredCount}`;
    });
}

filterListInventory.addEventListener('change', applyFilterListInventory);
applyFilterListInventory();

const inventoryDisplayName = document.getElementById('inventory-display-name');
const inventoryDisplaySpeed = document.getElementById('inventory-display-speed');
const inventoryDisplayLoad = document.getElementById('inventory-display-load');
const inventoryDisplayInventory = document.getElementById('inventory-display-inventory');

confirmHealthBtn.disabled = true;
let selectedInventoryId = null;

const inventoryItens = document.querySelectorAll('[data-inventoryid]');

inventoryItens.forEach(item => {
    item.addEventListener('click', () => {
        inventoryItens.forEach(el => el.setAttribute('aria-selected', 'false'));
        item.setAttribute('aria-selected', 'true');

        selectedInventoryId = item.dataset.inventoryid;

        let damageData = getDamageData();
        let maxHealth = parseInt(item.dataset.maxhealth);
        let currentHealth = maxHealth - (damageData[selectedInventoryId] || 0);
        console.log(maxHealth, currentHealth)
        let isInventory = 'inventory-';
        
        updateHealthBar(currentHealth, maxHealth, isInventory);

        inventoryDisplayName.textContent = item.dataset.name;
        inventoryDisplaySpeed.textContent = `${item.dataset.speed} m/t`;
        inventoryDisplayLoad.textContent = `${item.dataset.load}`;
        
        const inventoryData = getInventoryData();

        inventoryDisplayInventory.addEventListener('input', () => {
            if (!selectedInventoryId) return;
            
            inventoryData[selectedInventoryId] = inventoryDisplayInventory.value;
            setInventoryData(inventoryData);
            updateTotalLoad();
        });

        updateTotalLoad();

        let sum = 0;

        inventoryDisplayInventory.addEventListener('input', updateTotalLoad);

        inventoryDisplayInventory.value = inventoryData[selectedInventoryId];
    });
});

function updateTotalLoad() {
    const updatedInvetoryData = getInventoryData();
    let weight = updatedInvetoryData[selectedInventoryId].match(/\d/g);
    sum = weight ? weight.reduce((acumulador, valorAtual) => {
        const valorReal = valorAtual === 0 ? 0.5 : valorAtual;
        return acumulador + parseInt(valorAtual);
    }, 0) : 0;
    updateDisplayTotalLoad(sum);
}

const totalLoad = document.getElementById('inventory-display-total-load');

function updateDisplayTotalLoad(sum) {
    totalLoad.textContent = `Carga total: ${sum}`;
}

function getInventoryData() {
    return JSON.parse(localStorage.getItem('inventoryData')) || {};
}

function setInventoryData(inventoryData) {
    localStorage.setItem('inventoryData', JSON.stringify(inventoryData));
}

</script>
@endpush