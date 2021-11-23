$(document).ready(function () {
  let minutes = 25,
    isPaused = !1,
    timerId = 0;

  function startTimer(e, i) {
    let t, s, n = e;
    timerId = setInterval(function () {
      isPaused || (t = parseInt(n / 60, 10),
        s = parseInt(n % 60, 10),
        t = t < 10 ? "0" + t : t,
        s = s < 10 ? "0" + s : s,
        i.text(t + ":" + s)
        , --n < 0 && (n = e, $("#stop").hide(), $("#resume").hide(),
          checkTime())
      )
    }, 1e3)
  }

  function breakTime(e, i) {
    let t, s, n = e;
    timerId = setInterval(function () {
      isPaused || (t = parseInt(n / 60, 10),
        s = parseInt(n % 60, 10),
        t = t < 10 ? "0" + t : t,
        s = s < 10 ? "0" + s : s,
        i.text(t + ":" + s)
        , --n < 0 && (n = e, $("#stop").hide(), $("#resume").hide(),
          checkTimeBreak())
      )
    }, 1e3)
  }

  function checkTimeBreak() {
    if ($("#time").text() == "00:00") {
      alert('Now pomodoro start again...');
      clearInterval(timerId);
      history.go(0);
      minutes = 5;
      startPomodoro(minutes);
    }
  }

  function checkTime() {
    if ($("#time").text() == "00:00") {
      alert('Time over...');
      $.ajax({
        url: "/pomodoro",
        type: "POST",
      });
      isPaused = !isPaused;
      clearInterval(timerId);
      doRest();
    }
  }

  function doRest() {
    alert('Now take a short break...');
    minutes = 5;
    isPaused = !1;
    breakTime(60 * 1, $("#time"));
  }

  function startPomodoro(e) {
    startTimer(60 * e, $("#time"));
  }
  $("#time").text(minutes),
    $("#berhenti").hide(),
    $("#lanjut").hide(),
    $("#segar").hide(),
    $("#mulai").on("click", function () {
      $(this).hide(), isPaused = !1, startPomodoro(minutes), $("#berhenti").show()
    }),
    $("#berhenti").on("click", function () {
      $(this).hide(), $("#lanjut").show(), $("#segar").show(), isPaused = !isPaused
    }),
    $("#lanjut").on("click", function () {
      $(this).hide(), $("#berhenti").show(),
        $("#segar").hide(),
        isPaused = !isPaused
    }),
    $("#segar").on("click", function () {
      $("#berhenti").hide(),
        $("#lanjut").hide(),
        $("#mulai").show(),
        $("#segar").hide(),
        clearInterval(timerId),
        $("#time").text(minutes)
    });
});