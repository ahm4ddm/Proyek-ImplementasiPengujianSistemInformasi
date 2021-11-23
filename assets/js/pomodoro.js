<<<<<<< Updated upstream
let minutes = 25,
  isPaused = !1,
  timerId = 0;

function startTimer( e, i )
{
  let t, s, n = e;
  timerId = setInterval( function ()
  {
    isPaused || ( t = parseInt( n / 60, 10 ), s = parseInt( n % 60, 10 ), t = t < 10 ? "0" + t : t, s = s < 10 ? "0" + s : s, i.text( t + ":" + s ), --n < 0 && ( n = e, $( "#stop" ).hide(), $( "#resume" ).hide() ) )
  }, 1e3 )
}
=======
$(document).ready(function () {
  let minutes = .1,
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

  function checkTime(){
    if($("#time").text() == "00:00"){
      alert('Time Over');
      $.ajax({
        url: "/pomodoro",
        type: "POST",
      });
      isPaused = !isPaused;
      clearInterval(timerId);
      doRest();
    }
  }

  function doRest(){
      alert('Now Resting...');
      minutes = 5;
      isPaused = !1;
      startTimer(60 * 5, $("#time"));
  }

  function startPomodoro(e) {
    startTimer(60 * e, $("#time"))

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

>>>>>>> Stashed changes

function startPomodoro( e )
{
  startTimer( 60 * e, $( "#time" ) )
}
$( "#time" ).text( minutes ), $( "#berhenti" ).hide(), $( "#lanjut" ).hide(),
$( "#segar" ).hide(), $( "#mulai" ).on( "click", function ()
{
  $( this ).hide(), isPaused = !1, startPomodoro( minutes ), $( "#berhenti" ).show()
} ), $( "#berhenti" ).on( "click", function ()
{
  $( this ).hide(), $( "#lanjut" ).show(), $( "#segar" ).show(), isPaused = !isPaused
} ), $( "#lanjut" ).on( "click", function ()
{
  $( this ).hide(), $( "#berhenti" ).show(), 
  $( "#segar" ).hide(), 
  isPaused = !isPaused
} ), 
$( "#segar" ).on( "click", function ()
{
  $( "#berhenti" ).hide(), 
  $( "#lanjut" ).hide(), 
  $( "#mulai" ).show(), 
  $( "#segar" ).hide(),
  clearInterval( timerId ), 
  $( "#time" ).text( minutes )
} );