<form method="POST">
    <table>
        <tr>
            <td>
                <p>Username:</p>
            </td>
            <td>
                <input type="text" name="username" id="username"></input>
            </td>
        </tr>
        <tr>
            <td>
                <p>Password:</p>
            </td>
            <td>
                <input type="password" name="password1" id="password1"></input>
            </td>
        </tr>
        <tr>
            <td>
                <p>Password:</p>
            </td>
            <td>
                <input type="password" name="password2" id="password2"></input>
            </td>
        </tr>
        <tr>
            <td>
                <p>e-mail:</p>
            </td>
            <td>
                <input type="email" name="email" id="email"></input>
            </td>
        </tr>
    </table>
    <button type="submit">Register</button>
</form>

<?php
/*
 * File for user registration.
 */

include('includes/functions.php');

$registration = [
    'username' => false,
    'password' => false,
    'email' => false
];

if (isset($_POST['username']))
    $username = $_POST['username'];
if (isset($_POST['password1']))
    $password1 = $_POST['password1'];
if (isset($_POST['password2']))
    $password2 = $_POST['password2'];
if (isset($_POST['email']))
    $email = $_POST['email'];

$username = '';
$password1 = '';
$password2 = '';
$email = '';

$username = stripslashes($username);
$password1 = stripslashes($password1);
$password2 = stripslashes($password2);
$email = stripslashes($email);

$username = mysql_real_escape_string($username);
$password1 = mysql_real_escape_string($password1);
$password2 = mysql_real_escape_string($password2);
$email = mysql_real_escape_string($email);

if (!$username || $password1 || $password2 || $email) {
    echo 'You have to fill all forms.';
} else {
    if (strlen($username) > 5 && strlen($username) < 16) {
        $registration['username'] = true;
    } else {
        echo 'Your username must be more than 5 and less than 16 characters.';
    }
    if ($password1 === $password2) {
        unset($password2);
    } else {
        echo 'Your passwords don\'t match, correct this.';
    }
    if (validateEmail($email) === true) {
        //TODO: database connection and registration query
    } else {
        echo 'Your email address is not valid. Try again.';
    }
}
?>