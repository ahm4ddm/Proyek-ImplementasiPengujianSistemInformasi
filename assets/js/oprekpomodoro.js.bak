let minutes = 24,
    seconds = 60,
    isPlay = false;
// workTime = 25,
// breakTime = 5,
// isBreak = false,
// timerOn = false;

const timerLoop = () => {
    if (isPlay) {
        $('#minutes').text(minutes);

        if (seconds > 0) {
            seconds--;

            if (seconds < 10) {
                $('#seconds').text('0' + seconds);

            } else {
                $('#seconds').text(seconds);
            }

            setTimeout(timerLoop, 1000);

        } else if (minutes + seconds > 0) {
            minutes--;
            $('#minutes').text(minutes);
            seconds = 60;
            timerLoop();

        }
    }
}


$('#mulai').click(function () {
    if ($(this).data('clicked', true)) {
        $('#mulai').hide();
        isPlay = true;
        timerLoop();
        $('#pomo-status').text('Timer is running...');
    }
});

$('#berhenti').click(function () {
    if ($(this).data('clicked', true)) {
        isPlay = false;
        $('#mulai').show();
    }
});

$('#segar').click(function () {
    resetTimer();
});