<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="includes/login.php" method="POST">
            <hgroup>
            <h1>Simtr</h1>
            <h2>simple PBBG (Persistent Browser Based Game)</h2>
            </hgroup>
            <table>
                <tr>
                    <td>
                        <p>Login:</p>
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
                        <input type="password" name="password" id="password"></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" id="submit">Login</button>
                    </td>
                    <td>
                        <button type="button" id="register" onclick="location.href='register.php';">Register</button>
                    </td>
                </tr>  
            </table>     
        </form>
        <?php
        
        ?>
    </body>
</html>
