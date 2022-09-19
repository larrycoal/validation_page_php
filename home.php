<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./index.css">
    <title>Home</title>
</head>
<body class="home__wrapper">
    <header>
        <h2>E-fit</h2>
        <nav>
            <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Portal</li>
            </ul>
        </nav>
    </header>
      <main>
            <h3>WELCOME <?php echo $_SESSION['user']?></h3>
        </main>
</body>
</html>