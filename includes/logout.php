<?php

/*
 * File for allowing the user to logout from Simtr.
 */

session_start();
session_destroy();

header("location:../index.php");

?>
