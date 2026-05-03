<section id="heal-component" popover class="relative top-1/2 left-1/2 -translate-1/2 w-200 min-h-100 p-4 flex-col items-center gap-10 bg-bg-primary rounded-lg border-2 border-border-primary text-white">
    <x-close-btn target="heal-component"/>
    <section class="flex py-2 gap-2 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m14.479 19.374-.971.939a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5a5.2 5.2 0 0 1-.219 1.49"/><path d="M15 15h6"/><path d="M18 12v6"/></svg>
        <span class="text-lg font-medium">Cura</span>
    </section>
    <section class="grid grid-cols-2 gap-4 justify-center justify-items-center items-center content-center w-full *:w-full p-4 *:p-2">
        <section class="col-start-1 row-start-1">
            <section class="flex justify-center items-center gap-2">
                <span>Cura</span>
                <select name="heal-dices" id="heal-select" class="flex-1 bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 rounded-lg">
                    <option value="descleve">Descanso Leve</option>
                    <option value="descprof">Descanso Profundo</option>
                    <option value="comibebi">Comida e Bebida</option>
                    <option value="anlgesic">Analgésico</option>
                    <option value="bandagem">Bandagem</option>
                    <option value="sparysel">Spray Selador</option>
                    <option value="ervmedic">Erva Medicinal</option>
                    <option value="injetavl">Cura Injetável</option>
                    <option value="kitmedic">Kit Médico</option>
                    <option value="custom">Personalizado</option>
                </select>
            </section>
        </section>
        <section class="col-start-1 row-start-2">
            <button id="roll-heal-btn" class="flex justify-center items-center p-2 gap-2 w-full bg-bg-tertiary hover:bg-bg-tertiary-hover disabled:text-white-muted disabled:bg-bg-secondary rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="12" height="12" x="2" y="10" rx="2" ry="2"/><path d="m17.92 14 3.5-3.5a2.24 2.24 0 0 0 0-3l-5-4.92a2.24 2.24 0 0 0-3 0L10 6"/><path d="M6 18h.01"/><path d="M10 14h.01"/><path d="M15 6h.01"/><path d="M18 9h.01"/></svg>
                <span>Rolar</span>
            </button>
        </section>
        <section class="col-start-2 row-start-1 flex justify-center gap-2">
            <section>
                <span>Fixo</span>
                <input id="heal-fixed-count" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" disabled/>
            </section>
            <section>
                <span>Dados</span>
                <input id="heal-dices-count" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" disabled/>
            </section>
            <section>
                <span>Lados</span>
                <input id="heal-dices-faces" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" disabled/>
            </section>
        </section>
        <section class="col-start-2 row-start-2">
            <button id="confirm-custom-heal" class="flex justify-center items-center p-2 gap-2 w-full disabled:text-white-muted disabled:bg-bg-secondary bg-bg-tertiary hover:bg-bg-tertiary-hover rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                <span>Confirmar</span>
            </button>
        </section>
        <section id="heal-result-display" class="col-start-2 row-start-3 flex flex-wrap justify-center gap-2 *:bg-bg-secondary *:p-2 *:rounded-lg *:text-center *:block *:w-15.5">
        </section>
        <section class="col-start-1 row-start-3">
            <span id="result-heal-total" class="block bg-bg-tertiary p-2 w-full rounded-lg text-center">Total</span>
        </section>
    </section>
</section>

@push('scripts')
<script>

const healSelect = document.getElementById('heal-select');

const healFixedCount = document.getElementById('heal-fixed-count');
const healDicesCount = document.getElementById('heal-dices-count');
const healDicesFaces = document.getElementById('heal-dices-faces');

const confirmCustomHeal = document.getElementById('confirm-custom-heal');

const healResultDisplay = document.getElementById('heal-result-display');
const healTotal = document.getElementById('result-heal-total');

healSelect.addEventListener('change', updateDicesHealDisplay);
confirmCustomHeal.addEventListener('click', ()=> {
    updateDicesHealDisplay();
});

let fixedHeal = 0, countHeal = 0, facesHeal = 0;

updateDicesHealDisplay();

function updateDicesHealDisplay() {
    healTotal.textContent = 'Total';
    
    fixedHeal = 0;
    countHeal = 0;
    facesHeal = 0;
    
    let option = healSelect.value;

    healFixedCount.disabled = true;
    healDicesCount.disabled = true;
    healDicesFaces.disabled = true;
    confirmCustomHeal.disabled = true;
    
    if (option == 'custom') {
        healFixedCount.disabled = false;
        healDicesCount.disabled = false;
        healDicesFaces.disabled = false;
        confirmCustomHeal.disabled = false;

        fixedHeal = healFixedCount.value;
        countHeal = healDicesCount.value;
        facesHeal = healDicesFaces.value;
    }

    if (option == 'descleve') { fixedHeal = 1; countHeal = 1; facesHeal = 4; }
    else if (option == 'descprof') { fixedHeal = 2; countHeal = 1; facesHeal = 8; }
    else if (option == 'comibebi') { fixedHeal = 3; countHeal = 1; facesHeal = 4; }
    else if (option == 'anlgesic') { fixedHeal = 5; countHeal = 1; facesHeal = 6; }
    else if (option == 'bandagem') { fixedHeal = 2; countHeal = 2; facesHeal = 4; }
    else if (option == 'spraysel') { fixedHeal = 0; countHeal = 3; facesHeal = 4; }
    else if (option == 'ervmedic') { fixedHeal = 1; countHeal = 1; facesHeal = 4; }
    else if (option == 'injetavl') { fixedHeal = 4; countHeal = 2; facesHeal = 6; }
    else if (option == 'kitmedic') { fixedHeal = 4; countHeal = 4; facesHeal = 4; }

    healFixedCount.value = fixedHeal;
    healDicesCount.value = countHeal;
    healDicesFaces.value = facesHeal;

    healResultDisplay.textContent = null;
    healResultDisplay.appendChild(updateResultHealDisplay(countHeal));
}

function updateResultHealDisplay(countHeal) {
    const fragment = document.createDocumentFragment();

    for (let i = 0; i < countHeal; i++) {
        const spanResult = document.createElement('span');
        spanResult.classList.add('heal-result-span');
        spanResult.textContent = `(d${facesHeal})`;
        fragment.appendChild(spanResult);
    }

    return fragment;
}

const rollHealBtn = document.getElementById('roll-heal-btn');

rollHealBtn.addEventListener('click', ()=> {
    const result = document.querySelectorAll('.heal-result-span');

    rollHealBtn.disabled = true ? result.length : false;

    let total = parseInt(fixedHeal);

    result.forEach(display => {
        const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

        display.classList.remove('text-green-400');
        display.classList.remove('text-red-400');

        rollDice();
        
        async function rollDice() {
            const finalResult = Math.floor(Math.random() * facesHeal) + 1;

            total += finalResult;

            const totalRolls = 10;

            for (let i = 0; i < totalRolls; i++) {
                display.innerText = `(${Math.floor(Math.random() * facesHeal) + 1})`;

                await sleep(50 + i * 20); 
            }
            rollHealBtn.disabled = false;

            if (finalResult == facesHeal) {
                display.classList.add('text-green-400');
            }
            if (finalResult == 1) {
                display.classList.add('text-red-400');
            }

            display.textContent = `(${finalResult})`;
            
            healTotal.textContent = `Total: ${total}`;

            const resultDicesTotal = document.getElementById('result-dices-total');
            resultDicesTotal.textContent = `Cura: ${total}`;
        };
    });
})


</script>
@endpush