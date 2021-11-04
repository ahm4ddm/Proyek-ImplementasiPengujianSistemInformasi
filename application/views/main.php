<html>

<head>
	<title>Timer ganteng</title>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid">
		<div class="col-md-12 d-flex flex-column h-75 justify-content-center align-items-center">
			<h1 style="font-size:10em">
				<span id="time">25:00</span>
			</h1>
		</div>
		<div>
			<button id="mulai" aria-hidden="true">Start</button>
		</div>
		<div>
			<button id="berhenti" aria-hidden="true">Pause</button>
		</div>
		<div>
			<button id="lanjut" aria-hidden="true">Resume</button>
		</div>
		<div>
			<button id="segar" aria-hidden="true">Refresh</button>
		</div>
		<div id="pomo-status">
			click to start!
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script src="assets/js/pomodoro.js"></script>

</html>