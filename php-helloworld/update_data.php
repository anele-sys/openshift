<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="ItemTableStyle.css">
        <title>Rental Page</title>
    </head>
    <body>
        <?php
        if (isset($_POST['edit_data'])) {
            $item_code = $_POST['item_code'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            $bin_number = $_POST['bin_number'];

            if (isset($_POST['update'])) {
                $new_item_code = $_POST['new_item_code'];
                $new_category = $_POST['new_category'];
                $new_description = $_POST['new_description'];
                $new_size = $_POST['new_size'];
                $new_color = $_POST['new_color'];
                $new_bin_number = $_POST['new_bin_number'];

                include_once 'connection.php';
                $servername = "localhost:3306";
                $username = "root";
                $upassword = "";
                $dbname = "equipmentrental";

                $conn = new mysqli($servername, $username, $upassword, $dbname);

                $edit = "UPDATE ItemTable SET category = '$new_category',  "
                        . "description = '$new_description', size = '$new_size', "
                        . "color = '$new_color', bin_number = '$new_bin_number', WHERE item_code = '$item_code'";

                if ($conn->query($edit) === TRUE) {
                    header("location: index.php");
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            ?>
            <h1 align="center" style="color:#191970;">Database data update for <em><?php echo $description; ?></em></h1>
            <form method="POST" style="max-width: 480px; margin: 0 auto;" action="">
                <div style="padding: 8px 0;">
                    <label style="width: 100%; display: block;">Item Code</label>
                    <input type="text" name="new_item_code" value="<?php echo $_POST["item_code"]; ?>" placeholder="">                    
                </div>

                <div style="padding: 8px 0;">
                    <label style="width: 100%; display: block;">Category</label>
                    <input type="text" name="new_category" value="<?php echo $_POST["category"]; ?>" placeholder="">
                </div>

                <div style="padding: 8px 0;">
                    <label style="width: 100%; display: block;">Description</label>
                    <input type="text" name="new_description" value="<?php echo $_POST["description"]; ?>" placeholder="">
                </div>

                <div style="padding: 8px 0;">
                    <label style="width: 100%; display: block;">Size</label>
                    <input type="text" name="new_size" value="<?php echo $_POST["size"]; ?>" placeholder="">
                </div>

                <div style="padding: 8px 0;">
                    <label style="width: 100%; display: block;">Color</label>
                    <input type="text" name="new_color" value="<?php echo $_POST["color"]; ?>" placeholder="">
                </div>

                <div style="padding: 8px 0;">
                    <label style="width: 100%; display: block;">Bin Number</label>
                    <input type="text" name="new_bin_number" value="<?php echo $_POST["bin_number"]; ?>" placeholder="">
                </div>

                <input type="submit" name="update" value="Update">
            </form>
<?php } ?>



    </body>

</html>