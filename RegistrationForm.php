<?php
$valid=true;
include('control/logincheck.php');

if(isset($_SESSION["valid"])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
h1 {text-align: center;}
p {text-align: center;}
body {
  background-image: url('image3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>

<br>
 <form method="post"> 
  <fieldset>
  <fieldset>			
<legend align="left"><b> REGISTRATION</b></legend>
<br>
<tr>
<td><label for="fname">First Name:</label></td>
<td><input type="text" id="textbox1"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="email">Email:</label></td>
<td><input type="text" id="textbox2"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="uname">User Name:</label></td>
<td><input type="text" id="textbox3"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="pass">Password:</label></td>
<td><input type="password" name="$pwd"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="cpass">Confirm Password:</label></td>
<td><input type="password" name="$pwd"></td>
</tr>
<br>
<hr>
<tr>
<fieldset>
<legend align="left">Gender</legend>
</tr>
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</fieldset>
<hr>

  <fieldset>
  <legend align="left">Date of Birth</legend>
<select name="Days">
<option value="Days">Days</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
<select name="Month">
<option value="Month">Month</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
</select>
<select name="Year">
<option value="year">Year</option>
<option value="1985">1985</option>
<option value="1985">1986</option>
<option value="1987">1987</option>
</select>
</fieldset>
<br>
<input type="Reset"> <br>
<a href="pageone.php">Submit</a>


</form> 
</table>
</table>
</table>

</head>
</html>
  </form>
