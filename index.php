<?php
session_start();
if (isset($_SESSION['firstname']))
{
    session_destroy();
}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Bowling02</title>
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>

    <h1>Bowlers</h1>
      
      <p><a href="registration-form.php">Register</a></p>
      
      <p>Please enter first and last name to log in</p>
    	<form action = "login.php" method = "post" >

		<p>First Name
		<input type = "text" size = "20" name = "firstname">
		</p>
            <p>Last Name
		<input type = "text" size = "20" name = "lastname">
		</p>
		<p>
		<input type = "submit" value = "Log In">
		</p>

	</form>  

  </body>

</html>