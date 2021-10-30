<!DOCTYPE html>
<html>

    <head>
        <title>Insert Page page</title>
    </head>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <body>
    <center>
        <?php
        include_once 'connection.php';
        $servername = "localhost:3306";
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
        $item_code = $_REQUEST['item_code'];
        $category = $_REQUEST['catagory'];
        $discription = $_REQUEST['discription'];
        $size = $_REQUEST['size'];
        $color = $_REQUEST['color'];
        $bin_number = $_REQUEST['bin_number'];

        // Performing insert query execution
        $sql = "INSERT INTO Users VALUES ('$first_name',
			'$last_name','$user_name','$age','$upassword')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

            echo nl2br("\n$first_name\n $last_name\n "
                    . "$user_name\n $age\n $upassword");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
