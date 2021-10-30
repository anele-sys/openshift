<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="ItemTableStyle.css">
        <title>Rental Page</title>
    </head>
    <body>

        <h1 align="center" style="color:#191970;">Welcome to Rental equipment Registered Administrators</h1>

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
        $sql = "SELECT * FROM Users";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table align='center' border='1px' style='width: 600px'; line-height: 40px;>";
                echo "<tr>";
                echo "<th>First_name</th>";
                echo "<th>Last_name</th>";
                echo "<th>Username</th>";
                echo "<th>Age</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "No records matching your query were found.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

// Close connection
        mysqli_close($link);
        ?>
       
    </body>

</html>