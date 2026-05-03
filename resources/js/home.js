// const rollListOne = document.querySelector('#roll-list-one ul:nth-child(2)');
// const rollListTwo = document.querySelector('#roll-list-two ul:nth-child(2)');

// const addCharacterBtn = document.querySelectorAll('.add-character-btn');

// addCharacterBtn.forEach(btn => {
//     btn.addEventListener('click', (event) => {
//         updateRolls(event);
        
//         updateRollLists();
//     });
// });

// let dicePerAttribute = 1;

// const selectAttribute = document.getElementById('roll-attribute');
// const selectSkill = document.getElementById('roll-skill');

// selectSkill.addEventListener('input', () => {
//     updateDices();
// })

// function updateDices() {
//     let nome = "{{ $nome }}";
//     console.log(nome);
// }

// function updateRolls(event) {
//     const templateSvg = document.createElement('img');
//     const templateSpanIcon = document.createElement('span');
//     const templateSpanName = document.createElement('span');
//     const templateSpanResult = document.createElement('span');
//     const templateLi = document.createElement('li');

//     templateSpanIcon.classList = 'item-icon';
//     templateSpanIcon.appendChild(templateSvg);

//     templateSpanName.classList = 'item-name';
//     templateSpanName.textContent = event.target.closest('.character-item').dataset.name;
//     templateSpanName.appendChild(templateSpanIcon);

//     templateSpanResult.classList = 'item-result-span';
    

//     //     for (let i = 0; i < count; i++) {
//     //     templateSpanResult.textContent = '(--)';
//     // }

//     // 'character-item odd:bg-bg-tertiary-variant even:bg-bg-tertiary hover:bg-bg-secondary-hover flex items-center justify-start'
    
    
//     // templateSpanResult.textContent = '--';
//     // templateSpanName.classList = 'item-name flex hover:*:flex';
    
//     // templateSvg.setAttribute('src', '/svgs/minus.svg');
    
//     // templateSpanIcon.appendChild(templateSvg);
//     // templateSpanIcon.classList = 'item-icon hidden flex-1 justify-end';
//     // templateSpanName.appendChild(templateSpanIcon);

//     // templateLi.classList = event.target.closest('.character-item').classList;
//     // templateLi.classList.remove('add-character-btn')
//     // templateLi.classList.add('remove-character-btn')
//     templateLi.append(templateSpanResult, templateSpanName);

//     event.target.closest('.characters-lists').dataset.list == 'one' ? rollListOne.append(templateLi) : rollListTwo.append(templateLi);
// }

// function updateRollLists() {
//     const removeCharacterBtn = document.querySelectorAll('.remove-character-btn');

//     removeCharacterBtn.forEach(btn => {
//         btn.addEventListener('click', (event) => {
//             event.target.closest('.character-item').remove()
//         });
//     });
    
//     const rollListOneArray = Array.from(document.querySelectorAll('#roll-list-one li'));
//     const rollListTwoArray = Array.from(document.querySelectorAll('#roll-list-two li'));

//     return rollListOneArray, rollListTwoArray, removeCharacterBtn;
// }

// const roll = document.querySelector('#roll');

// roll.addEventListener('click', () => {
//     const result = document.querySelectorAll('.item-result');

//     roll.disabled = true;

//     result.forEach(display => {
//         const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));
//         rollDice();
        
//         async function rollDice() {
//             const resultadoFinal = Math.floor(Math.random() * 20) + 1;
//             display.textContent = resultadoFinal;
//             const totalRolagens = 10;

//             for (let i = 0; i < totalRolagens; i++) {
//                 display.innerText = Math.floor(Math.random() * 20) + 1;

//                 await sleep(50 + i * 20); 
//             }
//             roll.disabled = false;
            
//             display.textContent = resultadoFinal;
//         };
//     });
// });