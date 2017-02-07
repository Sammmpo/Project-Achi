<!DOCTYPE html>
<html lang="en">
<?php include 'includer.php';?>



<?php
$points = 0;
?>

<title>ACHI - Your Page</title>

<head>
</head>

<body>

<div class="container">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>



<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 whitebg focus">

<div class="title">
      <h1>ACHI</h1>
      <br>
      <h2>Goals for your life.</h2>
</div>

<div class="div-padding">
  <span class="bolda">Click on the achievements as you complete them!</span>
</div>
<div class="div-padding">
  <!-- <span>Total Achievement Points: <span id="score">0</span></span> -->
  <span>Total Achievement Points: </span> <?php echo $points;?>
</div>

<form action="<?php ?>" method="post">
<input type="submit" name="achiButton1" value="Achi1">
<br>
<input type="submit" name="resetButton" value="Reset">
</form>

<br><br>

<button type="default" class="default achi-button" id="button1">
  <span class="achi-title">Achievement#1</span>
  <br><br>
  <span class="achi-desc">Achievement description.</span>
</button>

<button type="default" class="default achi-button" id="button2">
  <span class="achi-title">Achievement#2</span>
  <br><br>
  <span class="achi-desc">Achievement description.</span>
</button>

<button type="default" class="default achi-button" id="button3">
  <span class="achi-title">Achievement#3</span>
  <br><br>
  <span class="achi-desc">Achievement description.</span>
</button>

<button type="default" class="default achi-button" id="button4">
  <span class="achi-title">Achievement#4</span>
  <br><br>
  <span class="achi-desc">Achievement description.</span>
</button>

<button type="default" class="default achi-button" id="button5">
  <span class="achi-title">Achievement#5</span>
  <br><br>
  <span class="achi-desc">Achievement description.</span>
</button>

<div class="div-padding">
  <br><br>
  <a href="index.php">Log out</a>
  <br><br>
</div>

</div>



<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>



</div>

<script src="js/main.js"></script>
</body>

</html>
