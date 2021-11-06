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
              <div class="col-md-3">
                <img src="<?php echo base_url()?>assets/img/profile.jpg" width="75px" height="75px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
              </div>
              <div class="col-md-5">
                <p>Ipsum</p>
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
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Login</h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
      <form>
        <div class="mb-3">
          <input type="text" placeholder="Username" class="form-control text-center" id="usernameRegister" aria-describedby="email">
        </div>
        <div class="mb-3">
          <input type="password" placeholder="Password" class="form-control text-center" id="passwordRegister">
        </div>
        <div class="mb-3 d-grid gap-2">
          <button type="button" placeholder="Username" class="btn btn-block btn-secondary">Register</button>
        </div>
        <div class="mb-3 text-center">
          <span>Don't have account yet? </span><a class="" data-bs-toggle="modal" style="color:black" data-bs-target="#registerModal"><strong>Register</strong></a>
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
      <form>
        <div class="mb-3">
          <input type="email" placeholder="Email" class="form-control text-center" id="emailRegister" aria-describedby="email">
        </div>
        <div class="mb-3">
          <input type="text" placeholder="Username" class="form-control text-center" id="usernameRegister" aria-describedby="username">
        </div>
        <div class="mb-3">
          <input type="password" placeholder="Password" class="form-control text-center" id="passwordRegister">
        </div>
        <div class="mb-3">
          <input type="password" placeholder="Confirm Password" class="form-control text-center" id="passwordConfirmationRegister">
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