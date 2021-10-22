<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Store User Data</title>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
    <center>
        <h1>Store User data in Database</h1>

        <form action="RegisterUserCode.php" method="post">
            <div class="login-box">

                <p>
                    <label for="firstName">First Name:</label>
                    <input type="text" name="first_name" id="firstName">
                </p>


                <p>
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="last_name" id="lastName">
                </p>


                <p>
                    <label for="Username">Username:</label>
                    <input type="text" name="username" id="username">
                </p>


                <p>
                    <label for="age">Age:</label>
                    <input type="text" name="age" id="age">
                </p>


                <p>
                    <label for="password">Password:</label>
                    <input type="text" name="password" id="upassword">
                </p>


                <input type="submit" value="Submit">

                <p>
                    Login <a href="login.php">Sign in</a>
                </p>

        </form>
    </center>
</body>

</html>
