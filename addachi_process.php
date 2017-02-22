<!DOCTYPE html>
<html lang="en">
<?php include 'includer.php';?>

<div class="error">
<?php
$inputName = $_POST['input_achiname'];
$inputDesc = $_POST['input_achidesc'];
$inputReward = $_POST['input_achireward'];

$nameLength = strlen($inputName);
$descLength = strlen($inputDesc);
if ($nameLength < 3){
	echo "Achievement Name has to be at least 3 characters long. <br>";
	header("Refresh:2; url=http://localhost:8080/PHP_Project-Achievement/achicreation.php");
} else if ($descLength < 4) {
	echo "Description has to be at least 4 characters long. <br>";
	header("Refresh:2; url=http://localhost:8080/PHP_Project-Achievement/achicreation.php");
} else if ($inputReward < 1 || $inputReward > 100) {
	echo "Point Reward must be 1-100. <br>";
	header("Refresh:2; url=http://localhost:8080/PHP_Project-Achievement/achicreation.php");
} else {


			$sql = "INSERT INTO achievement (name, description, reward) VALUES ('$inputName', '$inputDesc', $inputReward)";
			if ($conn->query($sql) === TRUE) {
				echo "Creating Achievement...";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			header("Refresh:1; url=http://localhost:8080/PHP_Project-Achievement/main.php");

}
?>
</div>
