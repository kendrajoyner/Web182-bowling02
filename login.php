<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bowling 02</title>
    </head>
<body>

<?php

if (empty($_POST['firstname']) || empty($_POST['lastname'])){
    
    echo '<p> There is an error, please try again</p>';
    echo '<p><a href="index.php"> Return to login</a> </p>';
}

else{
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    
    include('config.php');
    $connect = mysqli_connect(SERVER,USER,PW,DB);

    
    if(!$connect)
        
    {
        echo 'Ahhhh...an error has occured! No Database found.';
    }
    
    else
    {
        $query = "SELECT first_name, last_name from bowlers WHERE first_name = '$firstname' AND last_name = '$lastname';";
        
        $result = mysqli_query($connect,$query);
        $row = mysqli_fetch_assoc($result);
        
        
    }
    


  if(!$result)
          
      {
          exit( "<p>Could not run the query </p>");
          
      }
    
       
    else
        
    {
          
       $_SESSION['firstname']  = $row['first_name'];
        
        
          
          echo '<p><a href="logout">Logout</a>' ." " .$_SESSION['firstname']."</p>";
          echo '<p><a href="showBowlers.php">Show Bowlers</a></p>';
          
      }
}
    ?>
    
    </body>
</html>