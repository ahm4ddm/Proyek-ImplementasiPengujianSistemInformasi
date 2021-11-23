<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
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
              <div class="col-md-1">
                <img src="<?= site_url('assets/img/profile.jpeg'); ?>" width="25px" height="25px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
              </div>
              <div class="col-md-7">
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
        <input type="hidden" id="idN" name="topic" value="<?php echo $id; ?>" />
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="/login" id="log_form">
          <div class="mb-3">
            <input type="text" name="user_name" id="user_name" placeholder="Username" class="form-control text-center" aria-describedby="username">
          </div>
          <div class="mb-3">
            <input type="password" name="password" id="password" placeholder="Password" class="form-control text-center">
          </div>
          <div class="mb-3 d-grid gap-2">
            <button id="login_submit" type="submit" class="btn btn-block btn-secondary">Login</button>
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
        <form method="post" action="/register" id="reg_form">
          <div class="mb-3">
            <input type="text" name="name_full" id="name_full" placeholder="Full Name" class="form-control text-center" aria-describedby="fullname">
          </div>
          <div class="mb-3">
            <div class="form-group">
              <input type="text" name="user_nameR" id="user_nameR" placeholder="Username" class="form-control text-center" aria-describedby="username">
              <?php echo form_error('user_nameR', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-group">
              <input type="email" name="user_email" id="user_email" placeholder="Email" class="form-control text-center" aria-describedby="email">
              <?php echo form_error('user_email', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>
          <div class="mb-3">
            <input type="password" name="user_password1" id="user_password1" placeholder="Password" class="form-control text-center">
          </div>
          <div class="mb-3">
            <input type="password" name="user_password2" id="user_password2" placeholder="Confirm Password" class="form-control text-center">
          </div>
          <div class="mb-3 d-grid gap-2">
            <button type="submit" class="btn btn-block btn-secondary" onclick="register_user();">Register</button>
          </div>
          <div class="mb-3 text-center">
            <span>Already have an account? </span><a class="" style="color:black" data-bs-toggle="modal" href="#loginModal"><strong>Login</strong></a>
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
        <h3><?php echo $username; ?></h3>
        <br>
        <p>You Spend</p>
        <h3><strong><?php if ($user_time_act === null) {
                      $user_time_act = "less";
                    } else if ($user_time_act < 1) {
                      $user_time_act = "less";
                    } else if ($user_time_act == 0) {
                      $user_time_act = "less";
                    }
                    print(($user_time_act)); ?> Hours</strong></h3>
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
        <?php
        if (($id) !== null) { ?>
          <form>
            <input type="hidden" id="idN" name="topic" value="<?php echo $id; ?>" />
            <div class="row">
              <div class="col-md-10">
                <input type="text" style="padding-left:30px;padding-top:10px;padding-bottom:10px" class="form-control" id="Catatan" placeholder="Type the things that you want to do...">
              </div>
              <div class="col-md-1">
                <button type="button" class="btn btn-outline-secondary btn-lg btn-block align-middle" style="margin-top:2px" id="addBtn"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </form>

          <div class="card w-100 p-3" style="width: 18rem;">
            <div class="card-body">
              <ul id="note">

              </ul>
            </div>
          </div>
        <?php
        } else { ?>
        <?php
          echo "<h4 style='text-align: center;'> Please login first to use the feature!</h4>";
        } ?>
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
              echo "Sorry! Use the pomodoro to appear";
            } else {
              echo $totalwaktu . " menit";
            }; ?>
          </div>
        </div>
        <div class="row">
          <div class="mb-3">
            <button type="button" placeholder="Username" class="btn btn-outline-secondary" disabled><?php echo $achievement ?></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://kit.fontawesome.com/ac17403586.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="/assets/js/sound_con.js"></script>
<script src="/assets/js/pomodoro.js"></script>
<script src="/assets/js/note.js"></script>
<script src="/assets/js/form_validations.js"></script>
<script>
  $('form input').on('keypress', function(e) {
    return e.which !== 13;
  });
</script>