<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Rental Page</title>
        <link rel="stylesheet" href="login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
        <h1 align="center" style="color:#191970;">Welcome to Rental equipment Registered Users</h1>
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
                echo "<table align='center' border='1px' style='width: 900px'; line-height: 40px;>";
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
                mysqli_free_result($result);
            } else {
                echo "No records matching your query were found.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        mysqli_close($link);
        ?>
    </body>
</html>