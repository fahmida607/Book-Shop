<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to page Two.</h5>



  <a href="pagethree.php">Types of Books</a><br>
 
  <a href="">Sci-Fiction</a><br>
  <a href="">Thriller</a><br>
  <a href="">Fantasy</a><br>
  <a href="">Biography</a><br>
  <a href="">Drama</a><br>
  <a ></a><br>


<h5>Do you want to go to <a href="pagethree.php">nextpage</a></h5>

<br/>
 <h5>Do you want to <a href="control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   