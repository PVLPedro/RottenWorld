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

startBtn.addEventListener('click', startTimer);
pauseBtn.addEventListener('click', pauseTimer);
resumeBtn.addEventListener('click', resumeTimer);
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
}

function updateDisplay() {
    secondsEl.textContent = formatTime(seconds);
    minutesEl.textContent = formatTime(minutes);
    hoursEl.textContent = formatTime(hours);
}

function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}