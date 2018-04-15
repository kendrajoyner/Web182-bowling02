<?php
session_start();
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Show Bowlers</title>
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>
<?php
      echo '<p><a href="index.php">Logout</a>' ." " .$_SESSION['firstname']."</p>";
      ?>
      <h1>Show Bowlers</h1>
      <p>placeholder</p>
    

  </body>

</html>