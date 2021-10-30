<!DOCTYPE html>
<html>

    <head>
        <title>Insert Page page</title>

        <link rel="stylesheet" href="login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    </head>

    <body>
        <div class="container">
            <?php
            // include_once 'connection.php';
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "equipmentrental";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            // Taking all 5 values from the form data(input)
            $first_name = $_REQUEST['first_name'];
            $last_name = $_REQUEST['last_name'];
            $user_name = $_REQUEST['username'];
            $age = $_REQUEST['age'];
            $upassword = $_REQUEST['password'];


            // Performing insert query execution
            $sql = "INSERT INTO Users ( first_name, last_name, username, age, password ) VALUES ( '$first_name',
    			'$last_name','$user_name','$age','$upassword' )";

            if (mysqli_query($conn, $sql)) {
                echo "<h3 class='pb-3'>Your data has been added successfully, see entry details below:."
                ?>
                <div>
                    <?php
                    echo '<p><strong>First:</strong> ' . $first_name . '</p>';
                    echo '<p><strong>Last Name:</strong> ' . $last_name . '</p>';
                    echo '<p><strong>User name:</strong> ' . $user_name . '</p>';
                    echo '<p><strong>Age:</strong> ' . $age . '</p>';
                    echo '<p><strong>Password:</strong> Your chosen password</p>';
                    ?>
                </div>
                <?php
            } else {

                echo '<p>Sorry, an error ocured. Details were not added, see error details bellow:</p>' . '</p>';
                echo '<p>' . mysqli_error($conn);
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </div>
    </body>

</html>
