const secondsEl = document.getElementById('seconds');
const minutesEl = document.getElementById('minutes');
const hoursEl = document.getElementById('hours');
const startBtn = document.getElementById('start-btn');
const pauseBtn = document.getElementById('pause-btn');
const resumeBtn = document.getElementById('resume-btn');
const resetBtn = document.getElementById('reset-btn');

let interval = null;
let seconds = 0;
let minutes = 0;
let hours = 0;
let isPaused = false;
let isStarted = false;

applaySavedTimer();

function applaySavedTimer() {
    seconds = parseFloat(localStorage.getItem('seconds'));
    minutes = parseFloat(localStorage.getItem('minutes'));
    hours = parseFloat(localStorage.getItem('hours'));

    updateDisplay();
}

applaySavedStates();

function applaySavedStates() {
    if (localStorage.getItem('isPaused') == 'false') toggleTimer();
}

startBtn.addEventListener('click', toggleTimer);
pauseBtn.addEventListener('click', toggleTimer);
resumeBtn.addEventListener('click', toggleTimer);
resetBtn.addEventListener('click', resetTimer);

document.addEventListener('keydown', (event) => {
    if (event.repeat) return;

    if (event.target.tagName === 'INPUT' || event.target.tagName === 'TEXTAREA') {
        return;
    }

    if (event.code === 'Space') {
        event.preventDefault();
        toggleTimer();
    }

    if (event.code === 'KeyR') {
        resetTimer();
    }

});

function toggleTimer() {
    if (!isStarted) {
        startTimer();
    } else if (!isPaused) {
        pauseTimer();
    } else {
        resumeTimer();
    }

    saveTimerStates(isPaused);
}

function startTimer() {
    if (isStarted) return;

    isStarted = true;
    isPaused = false;

    interval = setInterval(() => {
        if (!isPaused) {
            seconds += 1;

            if (seconds === 60) {
                minutes++;
                seconds = 0;
            }

            if (minutes === 60) {
                hours++;
                minutes = 0;
            }

            updateDisplay();
            saveTimerValues(seconds, minutes, hours);
        }
    }, 1000);

    startBtn.classList = 'hidden';
    pauseBtn.classList = 'flex';
    resumeBtn.classList = 'hidden';
}

function pauseTimer() {
    if (!isStarted) return;

    isPaused = true;

    pauseBtn.classList = 'hidden';
    resumeBtn.classList = 'flex';
}

function resumeTimer() {
    if (!isStarted) return;

    isPaused = false;

    pauseBtn.classList = 'flex';
    resumeBtn.classList = 'hidden';
}

function resetTimer() {
    clearInterval(interval);

    interval = null;
    isStarted = false;
    isPaused = false;
    seconds = 0;
    minutes = 0;
    hours = 0;

    updateDisplay();

    startBtn.classList = 'flex';
    pauseBtn.classList = 'hidden';
    resumeBtn.classList = 'hidden';

    localStorage.setItem('seconds', seconds);
    localStorage.setItem('minutes', minutes);
    localStorage.setItem('hours', hours);
    localStorage.setItem('isPaused', 'true');
}

function updateDisplay() {
    secondsEl.textContent = formatTime(seconds);
    minutesEl.textContent = formatTime(minutes);
    hoursEl.textContent = formatTime(hours);
}

function saveTimerValues(seconds, minutes, hours) {
    localStorage.setItem('seconds', seconds);
    localStorage.setItem('minutes', minutes);
    localStorage.setItem('hours', hours);
}

function saveTimerStates(isPaused) {
    localStorage.setItem('isPaused', isPaused);
}

function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}