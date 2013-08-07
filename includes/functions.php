<?php

/*
 * File that works as a function library.
 */

function validateEmail($em) {
    $v = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";

    return (bool) preg_match($v, $em);
}

function connectToDatabase() {
    //TODO: external connect to database function
}

?>
