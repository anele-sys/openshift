<!DOCTYPE html>
<html lang="en">

      <head>
        <meta charset="UTF-8">
       
        <title>Rental Page</title>
    </head>

        <h1 align="center" style="color:#191970;">Administration Database of Items</h1>

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
                echo "<table align='center' border='1px' style='width: 600px'; line-height: 40px;>";
                echo "<tr>";
                echo "<th>Item Code</th>";
                echo "<th>Category</th>";
                echo "<th>Discription</th>";
                echo "<th>Size</th>";
                echo "<th>Color</th>";
                echo "<th>Bin number</th>";
                echo "<th>Update</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['item_code'] . "</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['size'] . "</td>";
                    echo "<td>" . $row['color'] . "</td>";
                    echo "<td>" . $row['bin_number'] . "</td>";
                    echo '<td>
                    		<form action="update_data.php" name="equipmentrental" method="POST">
	                    		<input type="hidden" name="item_code" value="' . $row['item_code'] . '">
	                    		<input type="hidden" name="category" value="' . $row['category'] . '">
	                    		<input type="hidden" name="description" value="' . $row['description'] . '">
	                    		<input type="hidden" name="size" value="' . $row['size'] . '">
	                    		<input type="hidden" name="color" value="' . $row['color'] . '">
	                    		<input type="hidden" name="bin_number" value="' . $row['bin_number'] . '">
	                    		<input type="submit" name="edit_data" value="Edit"> 
                    		</form> 
                    	  </td>';
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
       
    </body>

</html>