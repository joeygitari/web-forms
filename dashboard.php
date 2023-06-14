<?php
    session_start();
?>
<?php
    include 'includes\dbh.inc.php';
    include 'includes\functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/solid/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Canela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css\dashboard.css" />
    <title>Dashboard</title>
</head>

<body>

<div class="app">
	<header class="app-header">
		<div class="app-header-logo">
			<div class="logo">
				<h1 class="logo-title">
					<span>YOUR DASHBOARD</span>
				</h1>
			</div>
		</div>
		<div class="app-header-actions">
			<button class="user-profile">
			<div class="name">
				<?php
					echo "<p>" .$_SESSION["firstname"]."  ".$_SESSION["lastname"]."</p>";
				?>    
           </div>
			</button>
			<div class="app-header-actions-buttons">
				<button class="icon-button large">
					<i class="fa fa-fw fa-comments-o"></i>
				</button>
				<button class="icon-button large">
					<i class="fa fa-bell"></i>
				</button>
			</div>
		</div>
		<div class="app-header-mobile">
			<button class="icon-button large">
				<i class="fa fa-list"></i>
			</button>
		</div>

	</header>
	<br>
		<div class="app-body-main-content">
			<section class="service-section">
				<h2>RECOMMENDED WEBSITES FOR YOU:</h2>
				<div class="tiles">
					<article class="tile">
						<div class="tile-header">
							<h3>
								<span>Click for Netflix</span>
								<span></span>

							</h3>
						</div>
						<a  href="https://www.netflix.com">
							<span>View</span>
							<span class="icon-button">
								<i class="fa fa-caret-right"></i>
							</span>
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<h3>
								<span>Click for Prime Video</span>
								<span></span>
							</h3>
						</div>
						<a href="https://www.primevideo.com">
							<span>View</span>
							<span class="icon-button">
								<i class="fa fa-caret-right"></i>
							</span>
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<h3>
								<span>Click for Showmax</span>
								<span></span>
							</h3>
						</div>
						<a href="https://www.showmax.com">
							<span>View</span>
							<span class="icon-button">
								<i class="fa fa-caret-right"></i>
							</span>
						</a>
					</article>
				</div>
			</section>
		
		</div>
	</div>
</div>

</body>

</html>