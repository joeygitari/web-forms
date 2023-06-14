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
    <title>Web forms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Canela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css" type="text/css">
</head>
<body>
    <header class="heading" alt="home">
        <h1>Web Forms by Joan Gitari</h1>
    </header>
    <main class="container">
        <div class="login">
            <?php if (isset($_SESSION["firstname"])) : ?>
                <p>Hello <?php echo $_SESSION["firstname"]; ?>!</p>
                <a href="dashboard.php">Dashboard</a>
                <a href="includes/logout.inc.php">Log Out</a>
            <?php else : ?>
                <a href="login.php">Log in</a>
                <br>
                <a href="registration.php">Create Account</a>
            <?php endif; ?>

        </div>
    </main>
</body>
</html>
