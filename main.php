<!DOCTYPE html>
<html lang="en">
<?php include 'includer.php';?>



<?php
$currentID = $_SESSION['sessionID'];

 function achiName($db, $id) {
   $query = "SELECT name from achievement where achiID='$id'";
   $result = mysqli_query($db,$query);
   $achi = $result->fetch_assoc();
   echo $achi["name"];
 }

 function achiDesc($db, $id){
   $query = "SELECT description from achievement where achiID='$id'";
   $result = mysqli_query($db,$query);
   $achi = $result->fetch_assoc();
   echo $achi["description"];
 }

 function achiReward($db, $id){
   $query = "SELECT reward from achievement where achiID='$id'";
   $result = mysqli_query($db,$query);
   $achi = $result->fetch_assoc();
   echo $achi["reward"];
 }

 ?>

<title>ACHI - Your Page</title>

<head>
</head>

<body>
<br>
<div class="container">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>

<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 whitebg">

<div class="title">
      <h1>ACHI</h1>
      <br>
      <h2>Goals for your life.</h2>
</div>

<div class="div-padding">
  <span class="bolda">Complete achievements for points!</span>
</div>
<div class="div-padding">
  <!-- <span>Total Achievement Points: <span id="score">0</span></span> -->
  <span>Total Achievement Points: </span>
<?php
    $query = "SELECT points from account where accountID='$currentID'";
    $result = mysqli_query($db,$query);
    $accountcheck = $result->fetch_assoc();
    echo $accountcheck["points"];
?>
</div>
<br>


<?php

$sql = "SELECT achiID, name, description, reward FROM achievement";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<div class='achi-box'>";
         echo "<span class='achi-title'>" . $row["name"] . "</span>" ;
         echo "<br><br>";
         echo "<span class='achi-desc'>" . $row["description"] . "</span>";
         echo "<br><br>";
         echo "<span class='achi-desc'>Reward: " . $row["reward"] . " points</span>";
         echo "<br><br>";
         $reward = $row["reward"];
         $achiID = $row["achiID"];
         echo "<form action='addpoints_process.php' method='post'>";
         echo "<input type='hidden' value='$reward' name='amount'>";
         echo "<input type='hidden' value='$achiID' name='number'>";
         echo "<input class='achi-complete' type='submit' value='Click to Complete'></form>";
         // echo "<span class='achi-desc'>Suggested Reward: " . $row["reward"] . " points.</span>";
         echo "</div><br>";
     }
} else {
     echo "<br><div class='noButton'><br>No achievements found. Create one!<br><br></div>";
}

$conn->close();

?>

<br><br><br>
<form action="achicreation.php" method="post">
<input class="yesButton" type="submit" value="Create New Achievement">
</form>

<div class="div-padding">
  <br><br>
  <a href="index.php">Log out</a>
  <br><br>
</div>

</div>

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>

</div>
<br>

<script src="js/main.js"></script>
</body>

</html>
