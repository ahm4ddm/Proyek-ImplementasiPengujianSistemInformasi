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
  box-shadow:none;
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
              <div class="col-md-1">
                <p>1</p>
              </div>
              <div class="col-md-3">
                <img src="<?php echo base_url()?>assets/img/profile.jpg" width="75px" height="75px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
              </div>
              <div class="col-md-5">
                <p>Lorem</p>
              </div>
              <div class="col-md-3">
                <p>1050</p>
              </div>
            </div>
            <div class="row" style="padding-bottom:20px">
              <div class="col-md-1">
                <p>2</p>
              </div>
<<<<<<< Updated upstream
              <div class="col-md-3">
                <img src="<?php echo base_url()?>assets/img/profile.jpg" width="75px" height="75px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
              </div>
              <div class="col-md-5">
                <p>Ipsum</p>
=======
              <div class="col-md-1">
                <img src="<?= site_url('assets/img/profile.jpeg'); ?>" width="25px" height="25px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
              </div>
              <div class="col-md-7">
                <p><?= $dt->username ?></p>
>>>>>>> Stashed changes
              </div>
              <div class="col-md-3">
                <p>1000</p>
              </div>
            </div>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
<<<<<<< Updated upstream
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Login</h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
      <form method="post" action="<?php base_url('authcon/login'); ?>">
        <div class="mb-3">
          <input type="text" name="name_full" placeholder="Username" class="form-control text-center" id="usernameRegister" aria-describedby="username" required>
        </div>
        <div class="mb-3">
          <input type="password" name="password" placeholder="Password" class="form-control text-center" id="passwordRegister" required>
        </div>
        <div class="mb-3 d-grid gap-2">
          <button type="submit" placeholder="Username" class="btn btn-block btn-secondary">Login</button>
        </div>
        <div class="mb-3 text-center">
          <span>Don't have account yet? </span><a class="" data-bs-toggle="modal" style="color:black" data-bs-target="#registerModal"><strong>Register</strong></a>
        </div>
      </form>
        </div>
=======
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>/login" id="log_form">
          <div class="mb-3">
            <input type="text" name="user_name" id="user_name" placeholder="Username" class="form-control text-center" aria-describedby="username">
          </div>
          <div class="mb-3">
            <input type="password" name="password" id="password" placeholder="Password" class="form-control text-center">
          </div>
          <div class="mb-3 d-grid gap-2">
            <button type="submit" class="btn btn-block btn-secondary">Login</button>
          </div>
          <div class="form-group">
          </div>
          <div class="mb-3 text-center">
            <span>Don't have account yet? </span><a class="" data-bs-toggle="modal" style="color:black" href="#registerModal"><strong>Register</strong></a>
          </div>
        </form>
>>>>>>> Stashed changes
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
      <form  action="<?php base_url('authcon/register'); ?>">
        <div class="mb-3">
          <input type="email" placeholder="Email" class="form-control text-center" id="emailRegister" aria-describedby="email" required>
        </div>
        <div class="mb-3">
          <input type="text" placeholder="Username" class="form-control text-center" id="usernameRegister" aria-describedby="username" required>
        </div>
        <div class="mb-3">
          <input type="password" placeholder="Password" class="form-control text-center" id="passwordRegister" required>
        </div>
        <div class="mb-3">
          <input type="password" placeholder="Confirm Password" class="form-control text-center" id="passwordConfirmationRegister" required>
        </div>
        <div class="mb-3 d-grid gap-2">
          <button type="button" placeholder="Username" class="btn btn-block btn-secondary">Register</button>
        </div>
        <div class="mb-3 text-center">
          <span>Already have an account? </span><a class="" style="color:black" data-bs-toggle="modal" data-bs-target="#loginModal"><strong>Login</strong></a>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>

<!-- Activity Modal -->
<div class="modal fade" id="activityModal" tabindex="-1" aria-labelledby="activityModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="<?= site_url('assets/img/profile.jpeg'); ?>" width="100px" height="100px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
        <h3><?php echo $username; ?>aaaa</h3>
        <br>
        <p>You Spend</p>
        <h3><strong># Hours</strong></h3>
        <p style="margin-bottom:80px">In a week</p>
      </div>
    </div>
  </div>
</div>

<!-- To Do List Modal -->
<div class="modal fade" id="todolistModal" tabindex="-1" aria-labelledby="todolistModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-10">
              <input type="email" style="padding-left:30px;padding-top:10px;padding-bottom:10px" class="form-control" id="Catatan" placeholder="Type the things that you want to do...">
            </div>
            <div class="col-md-1">
              <button type="button" class="btn btn-outline-secondary btn-lg btn-block align-middle" style="margin-top:2px"><i class="fas fa-plus"></i></button>
            </div>
          </div>
          </form>

          <div class="card w-100 p-3" style="width: 18rem;">
          <div class="card-body">
            <input type="checkbox"> AAAA </input> 
              <div class="todolistButton" class="ml-auto">
                <a href="#"><i class="fas fa-edit" class="float-right" style="font-size: 1rem;color:black"></i></a>
                <a href="#"><i class="fas fa-trash" class="float-right" style="font-size: 1rem;color:black"></i></a>
              </div>
          </div>
          <div class="card-body">
            <input type="checkbox"> AAAA </input>
            <div class="todolistButton" class="ml-auto">
                <a href="#"><i class="fas fa-edit" class="float-right" style="font-size: 1rem;color:black"></i></a>
                <a href="#"><i class="fas fa-trash" class="float-right" style="font-size: 1rem;color:black"></i></a>
              </div>
          </div>
        </div>
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
                <img src="<?php echo base_url()?>assets/img/profile.jpg" width="100px" height="100px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
              </div>
              <div class="col-md-9">
                <h3>Lorem</h3>
                <p>aaaaaaaaa</p>
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

  <!-- Profile Modal -->
<div class="modal fade" id="leaderboardModal" tabindex="-1" aria-labelledby="leaderboardModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="padding-left:30px;padding-right:30px">
            <div class="row" style="padding-bottom:20px">
              <div class="col-md-3">
                <img src="<?php echo base_url()?>/assets/img/profile.jpeg" width="100px" height="100px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
              </div>
              <div class="col-md-9">
                <h3>Lorem</h3>
                <p>aaaaaaaaa</p>
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
</div>

        <script src="https://kit.fontawesome.com/ac17403586.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
        <script>
        let minutes = 25;
        let isPaused = false;
        let timerId = 0;

        $("#time").text(minutes);
        $("#berhenti").hide();
        $("#lanjut").hide();
        $("#segar").hide();
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
            $("#segar").show();
            isPaused = !isPaused;
        });

        //lanjut button
        $("#lanjut").on("click", function () {
            $(this).hide();
            $("#berhenti").show();
            $("#segar").hide();
            isPaused = !isPaused;
        });

<<<<<<< Updated upstream
        //Reset button
        $("#segar").on("click", function () {
            $("#berhenti").hide();
            $("#lanjut").hide();
            $("#mulai").show();
            clearInterval(timerId);
            $("#time").text(minutes);
        });
    </script>
=======
  <script src="https://kit.fontawesome.com/ac17403586.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
  <script src="<?= site_url() ?>/assets/js/sound_con.js"></script>
  <script src="<?= site_url() ?>/assets/js/pomodoro.js"></script>
  <script src="<?= site_url() ?>/assets/js/form_validations.js"></script>
>>>>>>> Stashed changes
