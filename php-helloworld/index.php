<?php
echo <<<_END
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <link rel="stylesheet" href="login.css">
        <title>Login Page</title>
    </head>
    <body>

        <form action="validate.php" method="post">
            <div class="login-box">
                <h1>Login</h1>

                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Username"
                           name="username" value="">
                </div>

                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password"
                           name="password" value="">
                </div>

                <input class="button" type="submit"
                       name="login" value="Sign In">

                <p>
                    Register <a href="RegisterUserForm.php">Sign up</a>
                </p>
            </div>
        </form>
    </body>

</html>
_END;
?>

