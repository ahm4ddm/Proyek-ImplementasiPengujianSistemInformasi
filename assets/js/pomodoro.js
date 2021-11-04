let minutes = 25;
let isPaused = false;
let timerId = 0;

$("#time").text(minutes);
function startTimer(duration, display) {
    let timer = duration, minutes, seconds;
    timerId = setInterval(function () {
        if (!isPaused) {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
            display.text(minutes + ":" + seconds);
            if (--timer < 0) {
                timer = duration;
                $("#stop").hide();
                $("#resume").hide();
            }
        }
    }, 1000);
}

function startPomodoro(min) {
    var fiveMinutes = 60 * min,
        display = $('#time');
    startTimer(fiveMinutes, display);
}

// mulai button
$("#mulai").on("click", function () {
    $(this).hide();
    isPaused = false;
    startPomodoro(minutes);
    $("#berhenti").show();
});

//berhenti button
$("#berhenti").on("click", function () {
    $(this).hide();
    $("#lanjut").show();
    isPaused = !isPaused;
});

//lanjut button
$("#lanjut").on("click", function () {
    $(this).hide();
    $("#berhenti").show();
    isPaused = !isPaused;
});

//Reset button
$("#segar").on("click", function () {
    $("#berhenti").hide();
    $("#lanjut").hide();
    $("#mulai").show();
    clearInterval(timerId);
    $("#time").text(minutes);
});