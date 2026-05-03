<section id="variants-component" popover class="relative top-1/2 left-1/2 -translate-1/2 w-200 min-h-100 p-4 flex-col items-center gap-10 bg-bg-primary rounded-lg border-2 border-border-primary text-white">
    <x-close-btn target="variants-component"/>
    <section class="flex py-2 gap-2 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 10 3 3"/><path d="M6.5 21A3.5 3.5 0 1 0 3 17.5a2.62 2.62 0 0 1-.708 1.792A1 1 0 0 0 3 21z"/><path d="M9.969 17.031 21.378 5.624a1 1 0 0 0-3.002-3.002L6.967 14.031"/></svg>
        <span class="text-lg font-medium">Variantes</span>
    </section>
    <section class="grid grid-cols-2 gap-4 justify-center justify-items-center items-center content-center w-full *:w-full p-4 *:p-2">
        <section class="col-start-1 row-start-1">
            <section class="flex justify-center items-center gap-2">
                <span>Opções</span>
                <select name="variants-dices" id="variants-select" class="flex-1 bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 rounded-lg">
                    <option value="contam">Contaminação</option>
                    <option value="pesade">Pesadelo</option>
                    <option value="sobrev">Sobrevivência</option>
                    <option value="quebra">Quebra</option>
                    <option value="custom">Personalizado</option>
                </select>
            </section>
        </section>
        <section class="col-start-1 row-start-2">
            <button id="roll-variants-btn" class="flex justify-center items-center p-2 gap-2 w-full bg-bg-tertiary hover:bg-bg-tertiary-hover rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="12" height="12" x="2" y="10" rx="2" ry="2"/><path d="m17.92 14 3.5-3.5a2.24 2.24 0 0 0 0-3l-5-4.92a2.24 2.24 0 0 0-3 0L10 6"/><path d="M6 18h.01"/><path d="M10 14h.01"/><path d="M15 6h.01"/><path d="M18 9h.01"/></svg>
                <span>Rolar</span>
            </button>
        </section>
        <section class="col-start-2 row-start-1 flex justify-center gap-2">
            <section>
                <span>Quantidade</span>
                <input id="variants-dices-count" class="text-white bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" disabled/>
            </section>
            <section>
                <span>Lados</span>
                <input id="variants-dices-faces" class="text-white bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" disabled/>
            </section>
        </section>
        <section class="col-start-2 row-start-2">
            <button id="confirm-custom-variants" class="flex justify-center items-center p-2 gap-2 w-full disabled:text-white-muted disabled:bg-bg-secondary bg-bg-tertiary hover:bg-bg-tertiary-hover rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                <span>Confirmar</span>
            </button>
        </section>
        <section id="variants-result-display" class="col-start-2 row-start-3 flex flex-wrap justify-center gap-2 *:bg-bg-secondary *:p-2 *:rounded-lg *:text-center *:block *:w-15.5">
        </section>
        <section class="col-start-1 row-start-3">
            <span id="result-variants-total" class="block text-white bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary p-2 w-full rounded-lg text-center">Total</span>
        </section>
    </section>
</section>

@push('scripts')
<script>

const variantsSelect = document.getElementById('variants-select');

const variantsDicesCount = document.getElementById('variants-dices-count');
const variantsDicesFaces = document.getElementById('variants-dices-faces');

const confirmCustomVariants = document.getElementById('confirm-custom-variants');

const variantsResultDisplay = document.getElementById('variants-result-display');
const variantsTotal = document.getElementById('result-variants-total');

variantsSelect.addEventListener('change', updateDicesVariantsDisplay);
confirmCustomVariants.addEventListener('click', ()=> {
    updateDicesVariantsDisplay();
});

updateDicesVariantsDisplay();

function updateDicesVariantsDisplay() {
    variantsTotal.textContent = 'Total';

    countVariants = 0, facesVariants = 0;
    
    let option = variantsSelect.value;

    variantsDicesCount.disabled = true;
    variantsDicesFaces.disabled = true;
    confirmCustomVariants.disabled = true;
    
    if (option == 'custom') {
        variantsDicesCount.disabled = false;
        variantsDicesFaces.disabled = false;
        confirmCustomVariants.disabled = false;

        countVariants = variantsDicesCount.value;
        facesVariants = variantsDicesFaces.value;
    }

    if (option == 'contam') { countVariants = 1; facesVariants = 20; }
    else if (option == 'pesade') { countVariants = 1; facesVariants = 20; }
    else if (option == 'sobrev') { countVariants = 1; facesVariants = 20; }
    else if (option == 'quebra') { countVariants = 1; facesVariants = 20; }

    variantsDicesCount.value = countVariants;
    variantsDicesFaces.value = facesVariants;

    variantsResultDisplay.textContent = null;
    variantsResultDisplay.appendChild(updateResultVariantsDisplay(countVariants));

    return { countVariants, facesVariants };
}

function updateResultVariantsDisplay(countVariants) {
    const fragment = document.createDocumentFragment();

    for (let i = 0; i < countVariants; i++) {
        const spanResult = document.createElement('span');
        spanResult.classList.add('variants-result-span');
        spanResult.textContent = `(d${facesVariants})`;
        fragment.appendChild(spanResult);
    }

    return fragment;
}

const rollVariantsBtn = document.getElementById('roll-variants-btn');

rollVariantsBtn.addEventListener('click', ()=> {
    const result = document.querySelectorAll('.variants-result-span');

    rollVariantsBtn.disabled = true ? result.length : false;

    let total = 0;

    result.forEach(display => {
        const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

        display.classList.remove('text-green-400');
        display.classList.remove('text-red-400');

        rollDice();
        
        async function rollDice() {
            const finalResult = Math.floor(Math.random() * facesVariants) + 1;

            total += finalResult;

            const totalRolls = 10;

            for (let i = 0; i < totalRolls; i++) {
                display.innerText = `(${Math.floor(Math.random() * facesVariants) + 1})`;

                await sleep(50 + i * 20); 
            }
            rollVariantsBtn.disabled = false;

            if (finalResult == facesVariants) {
                display.classList.add('text-green-400');
            }
            if (finalResult == 1) {
                display.classList.add('text-red-400');
            }

            display.textContent = `(${finalResult})`;
            
            variantsTotal.textContent = `Total: ${total}`;
        };
    });
})

</script>
@endpush