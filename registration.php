<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>


    <?php

  

  
        
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pass = $_POST['pass'];
    $email= $_POST['email'];
      
    include('config.php');
    $connect = mysqli_connect(SERVER,USER,PW,DB);
    
    
    
    
    if(!$connect)
        
    {
        exit ('Ahhhh...an error has occured! No Database found.');
    }
    
    else
    {
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $query = "INSERT INTO bowlers (first_name, last_name, pass, email) VALUES( '$firstname', '$lastname', '$pass','$email')";
        
        $result = mysqli_query($connect,$query);
     
        echo 'You have successfully registered';
       
        echo '<p><a href= "signin.php">Return to login</a></p>';
        
    }
    


    ?>



</body>

</html>