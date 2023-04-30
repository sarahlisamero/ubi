/*timer tanden poetsen*/
let countdown = document.getElementById("countdown");
let startButton = document.getElementById("start");
let restartButton = document.getElementById("restart");

let timeLeft = 120;
let timerInterval;

function startTimer() {
    timerInterval = setInterval(function() {
    let minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft - minutes * 60;
    countdown.innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

    timeLeft--;

    if (timeLeft < 0) {
        clearInterval(timerInterval);
        countdown.innerHTML = "0:00";
    }
    }, 1000);
}

function restartTimer() {
    clearInterval(timerInterval);
    countdown.innerHTML = "2:00";
    timeLeft = 120;
}

startButton.addEventListener("click", startTimer);
restartButton.addEventListener("click", restartTimer);
