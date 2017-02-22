<!DOCTYPE html>
<html lang="en">
<?php include 'includer.php';?>


<title>ACHI - Creation</title>

<head>

</head>


<body>

<div class="container">


<div class="col-lg-4.5 col-md-3.5 col-sm-3 col-xs-1">
</div>

<div class="col-lg-3 col-md-5 col-sm-6 col-xs-10 whitebg focus">

  <div class="title">
      <h1>ACHI</h1>
      <br>
      <h2>Goals for your life.</h2>
</div>

  <span class="text">Achievement Details</span><br><br>
    <form action="addachi_process.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" id="username" name="input_achiname" placeholder="Achievement Name (example: 'Love is in the Air')">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="pwd" name="input_achidesc" placeholder="Description (example: 'Get Married.')">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="pwd" name="input_achireward" placeholder="Point Reward (1-100)">
      </div>
      <input type="submit" class="yesButton" value="Create">
      <!-- <button type="register" class="btn btn-block">Sign up</button> -->
      </form>
      <br>
      <form action="main.php" method="post">
      <input class="noButton" type="submit" value="Cancel">
      </form>
    <br><br><br>
    <a href="index.php">Log out</a>
      <br><br><br>



</div>

<div class="col-lg-4.5 col-md-3.5 col-sm-3 col-xs-1">
</div>


</div>

</body>


</html>
