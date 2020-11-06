<?php
include('control/logincheck.php');

 if(isset($_SESSION['username']) ){
header("location: pageone.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
<style>
h1 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('image1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>



<h1>Welcome To Online Book Shop</h1>
<h3>LOGIN</h3>
<form action="" method="post">
   <p> <input type="text" name="username" placeholder="Enter your username" required></p>
    <br>
    <p><input type="password" name="password" placeholder="Enter your password" required></p>
    <p><input  name="login" type="submit" value="LOGIN"></p>
</form>
<br>
<h3>Don't you have an account?</h3>
<br>
<p><a href="RegistrationForm.php">REGISTRATION</a></p>



<br>
<?php echo $error; ?>

</body>
</html>
