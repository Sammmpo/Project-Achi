<!DOCTYPE html>
<html lang="en">
<?php include 'includer.php';?>

<?php
$currentID = $_SESSION['sessionID'];

$sql = "UPDATE account SET points = points+10 WHERE accountID=$currentID";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

        header("Refresh:0.2; url=http://localhost:8080/PHP_Project-Achievement/main.php");
?>
