<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Rental Page</title>
    </head>
    <body>
        <div class="container pt3">

            <h1 class="text-center pt-5" style="color:#191970;">Welcome to Rental Equipment.</h1>
            <h3 class="text-center py-3" style="color:#191970;">Have a look at our range below: (you need to login for our full online experience).</h3>

            <?php
            include_once 'connection.php';
            $servername = "localhost:3306";
            $username = "root";
            $upassword = "";
            $dbname = "equipmentrental";

            // Create connection
            $conn = new mysqli($servername, $username, $upassword, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // Attempt select query execution
            $sql = "SELECT * FROM  ItemTable";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border='1px'  align='center' style='width: 650px'; line-height: 40px;>";
                    echo "<tr>";
                    echo "<th>Item Code</th>";
                    echo "<th>Category</th>";
                    echo "<th>Discription</th>";
                    echo "</tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['item_code'] . "</td>";
                        echo "<td>" . $row['category'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Free result set
                    mysqli_free_result($result);
                } else {
                    echo "No records matching item found on the database.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            // Close connection
            mysqli_close($conn);
            ?>
            <p class="text-center pt-4"> Have an account?<a href="login.php">Login</a></p>
            <p class="text-center"> Don't have an account?<a href="RegisterUserForm.php">Register</a></p>

        </div>

    </body>

</html>