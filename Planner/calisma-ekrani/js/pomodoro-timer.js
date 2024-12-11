// Pomodoro Kodları //

var pomodoroButton = document.querySelector('#pomodoro-button');
var shortBreakButton = document.querySelector('#short-break-button');
var longBreakButton = document.querySelector('#long-break-button');
var startButton = document.querySelector('#start-button');
var pauseButton = document.querySelector('#pause-button');
var resetButton = document.querySelector('#reset-button');
var timerDisplay = document.querySelector('.timer-display');
var countdown;

var pomodoroTimeInput = document.querySelector('#pomodoro-time');
var shortBreakTimeInput = document.querySelector('#short-break-time');
var longBreakTimeInput = document.querySelector('#long-break-time');
var timerForm = document.querySelector('.timer-form');

var pomodoroTime = parseInt(pomodoroTimeInput.value) * 60; // Convert to seconds
var shortBreakTime = parseInt(shortBreakTimeInput.value) * 60; // Convert to seconds
var longBreakTime = parseInt(longBreakTimeInput.value) * 60; // Convert to seconds

pomodoroButton.addEventListener('click', startPomodoro);
shortBreakButton.addEventListener('click', startShortBreak);
longBreakButton.addEventListener('click', startLongBreak);
startButton.addEventListener('click', startTimer);
pauseButton.addEventListener('click', pauseTimer);
resetButton.addEventListener('click', resetTimer);
timerForm.addEventListener('submit', updateTimes);

function startPomodoro() {
  pomodoroTime = parseInt(pomodoroTimeInput.value) * 60;
  startTimerFrom(pomodoroTime);
}

function startShortBreak() {
  shortBreakTime = parseInt(shortBreakTimeInput.value) * 60;
  startTimerFrom(shortBreakTime);
}

function startLongBreak() {
  longBreakTime = parseInt(longBreakTimeInput.value) * 60;
  startTimerFrom(longBreakTime);
}

function startTimerFrom(time) {
  clearInterval(countdown);
  countdown = setInterval(function() {
    time--;
    var minutes = Math.floor(time / 60);
    var seconds = time % 60;
    timerDisplay.textContent = ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);
    document.title = timerDisplay.textContent + ' - Pomodoro Kronometresi';
    if (time == 0) {
      clearInterval(countdown);
      alert('Süre doldu!');
    }
  }, 1000);
}

function startTimer() {
  countdown = setInterval(function() {
    pomodoroTime--;
    var minutes = Math.floor(pomodoroTime / 60);
    var seconds = pomodoroTime % 60;
    timerDisplay.textContent = ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);
    document.title = timerDisplay.textContent + ' - Pomodoro Kronometresi';
    if (pomodoroTime == 0) {
      clearInterval(countdown);
      alert('Süre doldu!');
    }
  }, 1000);
}

function pauseTimer() {
  clearInterval(countdown);
}

function resetTimer() {
  clearInterval(countdown);
  timerDisplay.textContent = '25:00';
  document.title = 'Pomodoro Kronometresi';
}

function updateTimes(event) {
  event.preventDefault();
  pomodoroTime = parseInt(pomodoroTimeInput.value) * 60;
  shortBreakTime = parseInt(shortBreakTimeInput.value) * 60;
  longBreakTime = parseInt(longBreakTimeInput.value) * 60;
  resetTimer();
}

// input form kodlari //

function pomodoroInputBackgroundFormPopUp()
{
    var pomodoroInputBackgroundFormu = document.getElementById("pomodoro-input-background-formu");
    pomodoroInputBackgroundFormu.style.display = "flex";
}
function pomodoroInputBackgroundFormPopUpKapat()
{
    var pomodoroInputBackgroundFormu = document.getElementById("pomodoro-input-background-formu");
    pomodoroInputBackgroundFormu.style.display = "none";
}

// Form Kapatma //
window.onclick = function(event)
{
    var pomodoroInputBackgroundFormu = document.getElementById("pomodoro-input-background-formu");
        if (event.target == pomodoroInputBackgroundFormu) {
            pomodoroInputBackgroundFormPopUpKapat();
        }
        var todoInputBackgroundFormu = document.getElementById("todo-input-background-formu");
        if (event.target == todoInputBackgroundFormu) {
            todoInputBackgroundFormPopUpKapat();
        }

}