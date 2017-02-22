<!DOCTYPE html>
<html lang="en">
<?php include 'includer.php';?>

<div class="error">
<?php
$currentID = $_SESSION['sessionID'];

$reward = $_POST['amount'];
$achiID = $_POST['number'];

$sql = "UPDATE account SET points = points+'$reward' WHERE accountID=$currentID";
if (mysqli_query($conn, $sql)) {
    echo "Achievement completed.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


$sql = "DELETE FROM achievement WHERE achiID = $achiID";
if (mysqli_query($conn, $sql)) {
    // echo "Success.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);

        header("Refresh:1; url=http://localhost:8080/PHP_Project-Achievement/main.php");
?>
</div>
</html>
