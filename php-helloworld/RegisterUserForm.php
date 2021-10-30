<!DOCTYPE html>
<html lang="en">

    <head>
        
        <title>Get User Data</title>
        <link rel="stylesheet" href="login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    </head>

    <body>
    <div class="container">
        <h1 class="text-center pt-5 pb-3">User Registration</h1>



        <form action="RegisterUserCode.php" method="post">
            <div class="login-box">
                <div class="mb-3 text-left">

                    <label class="d-block text-left" for="firstName">First Name:</label>
                    <input class="form-control" type="text" required name="first_name" id="firstName">
                </div>


                <div class="mb-3 text-left">
                    <label class="d-block text-left" for="lastName">Last Name:</label>
                    <input class="form-control" type="text" required name="last_name" id="lastName">
                </div>


                <div class="mb-3 text-left">
                    <label class="d-block text-left" for="Username">Username:</label>
                    <input class="form-control" type="text" required name="username" id="username">
                </div>


                <div class="mb-3 text-left">
                    <label class="d-block text-left" for="age">Age:</label>
                    <input class="form-control" type="number" required name="age" id="age">
                </div>


                <div class="mb-3 text-left">
                    <label class="d-block text-left" for="password">Password:</label>
                    <input class="form-control" type="text" required name="password" id="upassword">
                </div>


                <div class="mb-3 text-left">
                    <button type="submit" name="register_info" class="btn btn-primary">Register</button>
                </div>

                <div class="mb-3 text-left">
                      <p class="text-center pt-4"> Have an acount?<a href="login.php">Login</a></p>
                      <p class="text-center"><a href="index.php">Start From Home</a></p>
                </div>

        </form>
    </div>
</body>

</html>
