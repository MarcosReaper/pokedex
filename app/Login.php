<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>Pokedex</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body class="w3-dark-gray w3-mobile">

<?php include("views/header.php");?>

<div class="w3-container w3-half w3-margin-top w3-display-middle">
    <h2 class="w3-hover-text-deep-purple">Login</h2>
    <form class="w3-container w3-card-4" action="entrypoints/LoginController.php" method="post">
        <p><input class="w3-input" type="text"  name="email" required><label>Email</label></p>
        <p><input class="w3-input" type="password" name="pass" required><label>Password</label></p>
        <p><button class="w3-button w3-section w3-red w3-ripple w3-hover-deep-purple"> Log in</button></p>
    </form>
    <a href="Singup.php"><p>Sing up</p></a>
</div>
</body>
</html>
