<html>
    <head>
    <title>Timer ganteng</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {

        background:
        /* top, transparent black, faked with gradient */ 
        linear-gradient(
          rgba(0, 0, 0, 0.3), 
          rgba(0, 0, 0, 0.3)
        ),
        /* bottom, image */
        url("<?php echo base_url()?>/assets/img/bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        }

        .container-fluid {
            padding-left:50px;
            padding-right:50px;
        }
    </style>
    </head>
    <body>
        <div class="container-fluid">

                <div class="row">
                    <!-- Dropdown -->
                    <div class="dropdown col-md-10">
                        <!-- Button Login -->
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Login
                        </button>

                        <button class="btn" type="button" id="menuDropdown" data-bs-toggle="dropdown" style="margin-left:-10px" aria-expanded="false">
                        <h3 style="padding-top:5px" class="text-light"><img src="<?php echo base_url()?>/assets/img/profile.jpeg" width="30px" height="30px" style="border-radius:50%;object-fit: cover;" alt="profile picture">   
                            Hi, Lorem</h3>
                        </button>
                        <ul class="dropdown-menu text-center" aria-labelledby="menuDropdown">
                            <li><h3>Great!</h3><p>A</p></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profileModal">Profile</a></li>
                            <li><a class="dropdown-item" >Activity</a></li>
                            <li><a class="dropdown-item" >Logout</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown">
                            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Select Your Music
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            <i style="font-size: 2rem;color:white;padding-left:10px;padding-top:10px" class="fas fa-music"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-column h-75 justify-content-center align-items-center">
                    <h1 style="font-size:13em;letter-spacing: -10px;font-weight:800" class="text-light">25:00</h1>
                </div>
        </div>
    </body>
</html>