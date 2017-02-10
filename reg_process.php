<!DOCTYPE html>
<html lang="en">
<?php include 'includer.php';?>

<?php

        $sql = "INSERT INTO account (username, password, points)
        VALUES ('$_POST[input_username]', '$_POST[input_password]', 0)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        header("Refresh:2; url=http://localhost:8080/PHP_Project-Achievement/index.php");

?>
