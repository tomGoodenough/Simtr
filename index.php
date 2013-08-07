<!DOCTYPE html>
<html>
    <head>
    	<link href="css/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
    
    <div id="content">
        <form action="includes/login.php" method="POST">
            <hgroup>
            <! Added shadows here for the headings, to create an 'engraved' effect on the text - perhaps could work better with a stone type background? !>
            <h1 style="font-size:50px;text-shadow: 0px 2px 3px #CCCCCC">Simtr</h1>
            <h2 style="text-shadow: 0px 2px 3px #CCCCCC;">Simple PBBG (Persistent Browser Based Game)</h2>
            </hgroup>
            <table align="center">
                <tr>
                    <td>
                        <p>Login:</p>
                    </td>
                    <td>
                    <! Rounded text inputs made with border radius and gave fantasy theme to inputs + buttons with it !>
                        <input style="border-radius:10px;" type="text" name="username" id="username"></input>                      
                    </td>
                </tr>
                <tr>
                    <td>
                       Password:
                    </td>
                    <td>
                        <input style="border-radius:10px;"type="password" name="password" id="password"></input>
                    </td>
                </tr>
                <tr>
               
                    <td>
                     <br/>
                        <button style="font-family:fantasy;border-radius:10px;" type="submit" id="submit">Login</button>
                    </td>
                    <td>
                    <br/>
                        <button style="font-family:fantasy;border-radius:10px;" type="button" id="register" onclick="location.href='register.php';">Register</button>
                    </td>
                </tr>  
            </table>     
        </form>
        
        </div>
        <?php
        
        ?>
    </body>
</html>
