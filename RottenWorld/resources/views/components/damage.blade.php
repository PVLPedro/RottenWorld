<section id="damage-component" popover class="relative top-1/2 left-1/2 -translate-1/2 w-200 min-h-100 p-4 flex-col items-center gap-10 bg-bg-primary rounded-lg border-2 border-border-primary text-white">
    <x-close-btn target="damage-component"/>
    <section class="flex py-2 gap-2 justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 19-6-6"/><path d="m5 21-2-2"/><path d="m8 16-4 4"/><path d="M9.5 17.5 21 6V3h-3L6.5 14.5"/></svg>
        <span class="text-lg font-medium">Dano</span>
    </section>
    <section class="grid grid-cols-2 gap-4 justify-center justify-items-center items-center content-center w-full *:w-full p-4 *:p-2">
        <section class="col-start-1 row-start-1">
            <section class="flex justify-center items-center gap-2">
                <span>Ataque</span>
                <select name="damage-dices" id="damage-select" class="flex-1 bg-bg-tertiary hover:bg-bg-tertiary-hover p-2 rounded-lg">
                    <option value="1d4">Golpes Simples</option>
                    <option value="1d6">Golpes Complexos</option>
                    <option value="2d4">Armas Brancas Leves</option>
                    <option value="3d4">Armas Brancas Pesadas</option>
                    <option value="3d6">Pistolas e Revolveres</option>
                    <option value="3d8">Carabincas</option>
                    <option value="3d8">Fuzis e Rifles</option>
                    <option value="4d8">Espingardas</option>
                    <option value="5d8">(Sub)Metralhadoras</option>
                    <option value="custom">Personalizado</option>
                </select>
            </section>
        </section>
        <section class="col-start-1 row-start-2">
            <button id="roll-damage-btn" class="flex justify-center items-center p-2 gap-2 w-full bg-bg-tertiary hover:bg-bg-tertiary-hover disabled:text-white-muted disabled:bg-bg-secondary rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="12" height="12" x="2" y="10" rx="2" ry="2"/><path d="m17.92 14 3.5-3.5a2.24 2.24 0 0 0 0-3l-5-4.92a2.24 2.24 0 0 0-3 0L10 6"/><path d="M6 18h.01"/><path d="M10 14h.01"/><path d="M15 6h.01"/><path d="M18 9h.01"/></svg>
                <span>Rolar</span>
            </button>
        </section>
        <section class="col-start-2 row-start-1 flex justify-center gap-2">
            <section>
                <span>Quantidade:</span>
                <input id="damage-dices-count" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" disabled/>
            </section>
            <section>
                <span>Lados:</span>
                <input id="damage-dices-faces" class="bg-bg-tertiary disabled:text-white-muted disabled:bg-bg-secondary w-12 p-2 rounded-lg text-center font-bold" disabled/>
            </section>
        </section>
        <section class="col-start-2 row-start-2">
            <button id="confirm-custom-damage" class="flex justify-center items-center p-2 gap-2 w-full disabled:text-white-muted disabled:bg-bg-secondary bg-bg-tertiary hover:bg-bg-tertiary-hover rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                <span>Confirmar</span>
            </button>
        </section>
        <section id="damage-result-display" class="col-start-2 row-start-3 flex flex-wrap justify-center gap-2 *:bg-bg-secondary *:p-2 *:rounded-lg *:text-center *:block *:w-15.5">
        </section>
        <section class="col-start-1 row-start-3">
            <span id="result-total" class="block bg-bg-tertiary p-2 w-full rounded-lg text-center">Total</span>
        </section>
    </section>
</section>

@push('scripts')
<script>

const damageComponent = document.getElementById('damage-component')
const damageSelect = document.getElementById('damage-select');

const damageDicesCount = document.getElementById('damage-dices-count');
const damageDicesFaces = document.getElementById('damage-dices-faces');

const confirmCustomDamage = document.getElementById('confirm-custom-damage');

const damageResultDisplay = document.getElementById('damage-result-display');
const damageTotal = document.getElementById('result-total');

damageSelect.addEventListener('change', updateDicesDamageDisplay);
confirmCustomDamage.addEventListener('click', ()=> {
    updateDicesDamageDisplay();
});

updateDicesDamageDisplay();

function updateDicesDamageDisplay() {
    damageTotal.textContent = 'Total';

    countDamage = 0, facesDamage = 0;
    
    let option = damageSelect.value;

    damageDicesCount.disabled = true;
    damageDicesFaces.disabled = true;
    confirmCustomDamage.disabled = true;
    
    if (option == 'custom') {
        damageDicesCount.disabled = false;
        damageDicesFaces.disabled = false;
        confirmCustomDamage.disabled = false;

        countDamage = damageDicesCount.value;
        facesDamage = damageDicesFaces.value;
    }

    if (option == '1d4') { countDamage = 1; facesDamage = 4; }
    else if (option == '1d6') { countDamage = 1; facesDamage = 6; }
    else if (option == '2d4') { countDamage = 2; facesDamage = 4; }
    else if (option == '3d4') { countDamage = 3; facesDamage = 4; }
    else if (option == '3d6') { countDamage = 3; facesDamage = 6; }
    else if (option == '3d8') { countDamage = 3; facesDamage = 8; }
    else if (option == '4d8') { countDamage = 4; facesDamage = 8; }
    else if (option == '5d8') { countDamage = 5; facesDamage = 8; }

    damageDicesCount.value = countDamage;
    damageDicesFaces.value = facesDamage;

    damageResultDisplay.textContent = null;
    damageResultDisplay.appendChild(updateResultDamageDisplay(countDamage));

    return { countDamage, facesDamage };
}

function updateResultDamageDisplay(countDamage) {
    const fragment = document.createDocumentFragment();

    for (let i = 0; i < countDamage; i++) {
        const spanResult = document.createElement('span');
        spanResult.classList.add('damage-result-span');
        spanResult.textContent = `(d${facesDamage})`;
        fragment.appendChild(spanResult);
    }

    return fragment;
}

const rollDamageBtn = document.getElementById('roll-damage-btn');

rollDamageBtn.addEventListener('click', ()=> {
    const result = document.querySelectorAll('.damage-result-span');

    rollDamageBtn.disabled = true ? result.length : false;

    let total = 0;

    result.forEach(display => {
        const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

        display.classList.remove('text-green-400');
        display.classList.remove('text-red-400');

        rollDice();
        
        async function rollDice() {
            const finalResult = Math.floor(Math.random() * facesDamage) + 1;

            total += finalResult;

            const totalRolls = 10;

            for (let i = 0; i < totalRolls; i++) {
                display.innerText = `(${Math.floor(Math.random() * facesDamage) + 1})`;

                await sleep(50 + i * 20); 
            }
            rollDamageBtn.disabled = false;

            if (finalResult == facesDamage) {
                display.classList.add('text-green-400');
            }
            if (finalResult == 1) {
                display.classList.add('text-red-400');
            }

            display.textContent = `(${finalResult})`;
            
            damageTotal.textContent = `Total: ${total}`;
        };
    });
})


</script>
@endpush