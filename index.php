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
                        <input type="text" name="username"></input>                      
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Password:</p>
                    </td>
                    <td>
                        <input type="password" name="password"></input>
                    </td>
                </tr>              
            </table>
            <button type="submit">Login</button>
        </form>
        <?php
        
        ?>
    </body>
</html>
