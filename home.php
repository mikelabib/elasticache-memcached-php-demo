<?php
session_start();

if(!isset($_SESSION['login_user'])) {

       header("location: index.php");
} 
?>

<html>
<head>
<title>Logged In</title>

</head>
<body>

Welcome :  <?php echo $_SESSION['login_user'] ?> 
<br>
Logged In :  <?php echo $_SESSION['logged_in'] ?>
<br>
Session ID:  <?php echo $_SESSION['id'] ?>

</body>
</html>
