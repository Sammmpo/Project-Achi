
<?php include 'includer.php';?>

<?php

$myusername = $_POST['login_username'];
$mypassword = $_POST['login_password'];

$query = "SELECT accountID from account where username='$myusername' AND password='$mypassword'";
$result = mysqli_query($db,$query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $currentID = $row["accountID"];
        $_SESSION['sessionID'] = $currentID;
        echo "Logged in successfully. You will be sent to the main page.";
        header("Refresh:3; url=http://localhost:8080/PHP_Project-Achievement/main.php");
    }
} else {
    echo "Invalid Username or Password. Try again.";
    header("Refresh:2; url=http://localhost:8080/PHP_Project-Achievement/index.php");
}

/*
$_SESSION['sessionID'] = $currentID;

if(mysqli_num_rows($result) > 0)
{
    echo "Logged in successfully. You will be sent to the main page.";
    header("Refresh:2; url=http://localhost:8080/PHP_Project-Achievement/main.php");
}
else {
    echo "Invalid Username or Password. You will be sent to the login page.";
    header("Refresh:2; url=http://localhost:8080/PHP_Project-Achievement/index.php");
}
*/
?>
