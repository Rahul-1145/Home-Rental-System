<?php
session_start();
if (isset($_SESSION["email"])) {
  header("location:owner/owner-index.php");
}

include("navbar.php");
include("owner-engine.php");

?>

<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Owner Login</h3>
  <hr><br><br>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <center><input type="submit" id="submit" name="owner_login" class="btn btn-primary btn-block" value="Login">
    </center>
  </form>
</div>