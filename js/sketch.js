/*timer tanden poetsen*/
console.log("ok");
let countdown = document.getElementById("countdown");
let startButton = document.getElementById("start");
let restartButton = document.getElementById("restart");

let timeLeft = 120;
let timerInterval;
let isAnimating = false;

function startTimer() {
    startButton.style.display = "none";
    restartButton.style.display = "block";
    
    animatedImage.classList.add('animate');
    isAnimating = true;

    timerInterval = setInterval(function() {
    let minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft - minutes * 60;
    countdown.innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

    timeLeft--;

    if (timeLeft < 0) {
        clearInterval(timerInterval);
        countdown.innerHTML = "0:00";
        startButton.style.display = "block";
        restartButton.style.display = "none";
        //display star
        document.querySelector(".star").style.display = "block";
    }
    }, 1000);
}

function restartTimer() {
    restartButton.style.display = "none";
    startButton.style.display = "block";
    clearInterval(timerInterval);
    countdown.innerHTML = "2:00";
    timeLeft = 120;
}

startButton.addEventListener("click", startTimer);
restartButton.addEventListener("click", restartTimer);

