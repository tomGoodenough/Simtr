<?php

/*
 * User login will be handled here.
 */

$username = $_POST['username'];
$password = $_POST['password'];

// database connection details, they will be moved to a more secure place later
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'simtr');

// get strings ready before connecting to SQL database
$username = stripslashes(trim($username));
$password = stripslashes($password);
$username = trim($username);
$password = trim($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// check if both input fields have strings

if (!$username || !$password) {
    echo 'You need to type both your username and your password.';
} else {

// database connection
    @ $db = new mysqli(HOST, USER, PASSWORD, DATABASE);

    if ($db->connect_errno) {
        die('Error: ' . $db->connect_errno());
    } else {
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $db->query($query);
        $count = $result->num_rows;
        
        session_start();
        
        if ($count == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            header("location:login_successful.php");
            
        } else {
           echo 'Your username or password is incorrect.';
        }
    }
}
?>