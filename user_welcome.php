<?php
session_start();
if(isset($_SESSION['login_session_username']))
{
    ?>

<html>
    <head>
        <title>Welcome to Flutur</title>
    </head>
    <body>
        <h1>Hello <?php echo $_SESSION['login_session_first_name']; ?></h1>
        <h2>Your email is <?php echo $_SESSION['login_session_email'];?></h2>
        <a href="/backend/logout.php">Logout</a>
    </body>
</html>

<?php
}

else{
   header("Location: ../index.php?login=error");
}
?>
