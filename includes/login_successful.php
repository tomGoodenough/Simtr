<?php
/*
 * Login successful message and redirect to user's panel.
 */

session_start();
if (!isset($_SESSION['username'])) {
    header("location:../index.php");
    exit;
}
?>

<!doctype html>

<html>
    <head>

    </head>
    <body>
        <p>Login successful.</p>
    </body>
</html>