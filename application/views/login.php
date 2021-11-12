<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  * {
    font-family: 'Poppins', sans-serif;
  }

  .modal-header {
    border-bottom: 0 none;
  }

  .modal-footer {
    border-top: 0 none;
  }

  #menuDropdown:focus {
    outline: none !important;
    box-shadow: none;
  }
</style>
<!-- <body class="bg-dark"> -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#leaderboardModal">
    Leaderboard
  </button>
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registerModal">
    Register
  </button>
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#profileModal">
    Profile
  </button> -->

<!-- Leaderboard Modal -->
<?php
// $dataraw = file_get_contents('leaderboard.json');
// $datas = json_decode($dataraw, true);
// $datas = $datas['leaderboard'];
?>
<div class="modal fade" id="leaderboardModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Leaderboard</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding-left:30px;padding-right:30px">
        <form>
          <div class="row" style="padding-bottom:20px">
            <?php $num = 1 ?>
            <?php foreach ($leaderboard as $dt) : ?>
              <div class="col-md-1">
                <p><?= $num++ ?></p>
              </div>
              <div class="col-md-3">
                <img src="<?= site_url('assets/img/profile.jpeg'); ?>" width="75px" height="75px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
              </div>
              <div class="col-md-5">
                <p><?= $dt->username ?></p>
              </div>
              <div class="col-md-3">
                <p><?= $dt->totalwaktu ?> menit</p>
              </div>
            <?php endforeach ?>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="/login">
          <div class="mb-3">
            <input type="text" name="user_name" placeholder="Username" class="form-control text-center" aria-describedby="username" required>
          </div>
          <div class="mb-3">
            <input type="password" name="password" placeholder="Password" class="form-control text-center" required>
          </div>
          <div class="mb-3 d-grid gap-2">
            <button type="submit" id="login" class="btn btn-block btn-secondary">Login</button>
          </div>
          <div class="mb-3 text-center">
            <span>Don't have account yet? </span><a class="" data-bs-toggle="modal" style="color:black" href="#registerModal"><strong>Register</strong></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/register" method="POST" oninput='user_password2.setCustomValidity(user_password2.value != user_password1.value ? "Password tidak sesuai" : "")'>
          <div class="mb-3">
            <input type="text" name="name_full" placeholder="Nama Lengkap" class="form-control text-center" id="nameRegister" aria-describedby="username" required>
          </div>
          <div class="mb-3">
            <input type="text" name="user_name" placeholder="Username" class="form-control text-center" id="usernameRegister" aria-describedby="username" required>
          </div>
          <div class="mb-3">
            <input type="email" name="user_email" placeholder="Email" class="form-control text-center" id="emailRegister" aria-describedby="email" required>
          </div>
          <div class="mb-3">
            <input type="password" name="user_password1" placeholder="Password" class="form-control text-center" id="passwordRegister" required>
          </div>
          <div class="mb-3">
            <input type="password" name="user_password2" placeholder="Confirm Password" class="form-control text-center" id="passwordConfirmationRegister" required>
          </div>
          <div class="mb-3 d-grid gap-2">
            <button type="submit" class="btn btn-block btn-secondary">Register</button>
          </div>
          <div class="mb-3 text-center">
            <span>Already have an account? </span><a class="" style="color:black" data-bs-toggle="modal" href="#loginModal"><strong>Login</strong></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding-left:30px;padding-right:30px">
        <div class="row" style="padding-bottom:20px">
          <div class="col-md-3">
            <img src="<?= site_url('assets/img/profile.jpeg'); ?>" width="100px" height="100px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
          </div>
          <div class="col-md-9">
            <h3><?php echo $username; ?></h3>
            <?php if ($totalwaktu == 0) {
              echo "Kamu belum menggunakan aplikasi ini";
            } else {
              echo $totalwaktu . " menit";
            }; ?>
          </div>
        </div>
        <div class="row">
          <div class="mb-3">
            <button type="button" placeholder="Username" class="btn btn-outline-secondary" disabled>Grade A</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/ac17403586.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js"></script>
  <script>
    let minutes = 25;
    let isPaused = false;
    let timerId = 0;

    $("#time").text(minutes);
    $("#berhenti").hide();
    $("#lanjut").hide();
    $("#segar").hide();

    function startTimer(duration, display) {
      let timer = duration,
        minutes, seconds;
      timerId = setInterval(function() {
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
    $("#mulai").on("click", function() {
      $(this).hide();
      isPaused = false;
      startPomodoro(minutes);
      $("#berhenti").show();
    });

    //berhenti button
    $("#berhenti").on("click", function() {
      $(this).hide();
      $("#lanjut").show();
      $("#segar").show();
      isPaused = !isPaused;
    });

    //lanjut button
    $("#lanjut").on("click", function() {
      $(this).hide();
      $("#berhenti").show();
      $("#segar").hide();
      isPaused = !isPaused;
    });

    //Reset button
    $("#segar").on("click", function() {
      $("#berhenti").hide();
      $("#lanjut").hide();
      $("#mulai").show();
      clearInterval(timerId);
      $("#time").text(minutes);
    });

    //Sound Control
    $(function() {
      let howler1 = new Howl({
        src: [
          'assets/audio/Sound1.mp3',
        ],
        loop: true,
        html5: true
      });
      let howler2 = new Howl({
        src: [
          'assets/audio/Sound2.mp3',
        ],
        loop: true,
        html5: true
      });
      let howler3 = new Howl({
        src: [
          'assets/audio/Sound3.mp3',
        ],
        loop: true,
        html5: true
      });
      let howler4 = new Howl({
        src: [
          'assets/audio/Sound4.mp3',
        ],
        loop: true,
        html5: true
      });
      let howler5 = new Howl({
        src: [
          'assets/audio/Sound5.mp3',
        ],
        loop: true,
        html5: true
      });
      $("#howler-play1").on("click", function() {
        howler1.stop();
        howler2.stop();
        howler3.stop();
        howler4.stop();
        howler5.stop();
        howler1.play();
      });
      $("#howler-play2").on("click", function() {
        howler1.stop();
        howler2.stop();
        howler3.stop();
        howler4.stop();
        howler5.stop();
        howler2.play();
      });
      $("#howler-play3").on("click", function() {
        howler1.stop();
        howler2.stop();
        howler3.stop();
        howler4.stop();
        howler5.stop();
        howler3.play();
      });
      $("#howler-play4").on("click", function() {
        howler1.stop();
        howler2.stop();
        howler3.stop();
        howler4.stop();
        howler5.stop();
        howler4.play();
      });
      $("#howler-play5").on("click", function() {
        howler1.stop();
        howler2.stop();
        howler3.stop();
        howler4.stop();
        howler5.stop();
        howler5.play();
      });
      $("#howler-stop").on("click", function() {
        howler1.stop();
        howler2.stop();
        howler3.stop();
        howler4.stop();
        howler5.stop();
      });
    });

    //change dropdown music
    $(".dropdown-menu li a").click(function() {
      $(".btn:first-child").html($(this).text() + ' <span class="caret"></span>');
    });
  </script>