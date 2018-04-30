<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration form</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>






<body>
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <header id="header" class="container">
                <div class="row">
                    <div class="12u">

                        <!-- Logo -->
                        <h1><a href="index.html" id="logo">Bowling</a></h1>



                    </div>
                </div>
            </header>
            <div id="banner">
                <div class="container">
                    <div class="row">
                        <div class="6u 12u(mobile)">




                            <?php 

if(empty($_POST['email']) || empty($_POST['pass']) )
{
    echo '<p>Please enter an email and password to login</p>';
    echo '<p><a href="signin.php" class="button-big">Return to login</a></p>';
}

else
// first round is okay -- gather variables and run the query
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // database code -- need to refactor
    include 'config.php';
    $connect = mysqli_connect(SERVER, USER, PW, DB);

    if(!$connect)
    {
        exit("Error could not connect to the database.");
    }

    else
    // all is good -- time to run the query and test the password
    {
            // first retrieve the bowler
            $query = "SELECT * from bowlers WHERE email = '$email'"; 
            $result = mysqli_query($connect, $query);

            // put the result in an array called row
            $row = mysqli_fetch_assoc($result);

            // test that only one row was returned
            if(@count($row['email']) == 0)
           
                echo "<p>No record found with the email $email.</p>";
       
        

            else
            {
                // test the password

                $hash = $row['pass'];

                if(password_verify($pass, $hash))
                {
                    // success
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['pass'] = $row['pass'];

                    echo '<p><a href="index.html" class="button-big">Logout</a>' . "  " . $_SESSION['email'] . '</p>';
                    echo '<p><a href="showBowlers.php" class="button-big">Show Bowlers</a></p>';

                }

                else
                    echo "<p>Passwords do not match.</p>";

            }

        }

    }



?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div id="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <div class="8u 12u(mobile)">

                        <!-- Links -->
                        <section>
                            <h2>Links to Important Stuff</h2>
                            <div>
                                <div class="row">
                                    <div class="3u 12u(mobile)">
                                        <ul class="link-list last-child">

                                            <li><a href="signin.php">Sign In</a></li>
                                            <li><a href="index.html">Home</a></li>

                                        </ul>
                                    </div>



                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="4u 12u(mobile)">

                        <!-- Blurb -->
                        <section>
                            <h2>Some Important Stuff</h2>
                            <p>
                                Signing up now will allow you to become part of an amazingly cool experience to let off steam. Don't miss this opportunity!
                            </p>
                        </section>

                    </div>
                </div>
            </footer>
        </div>

        <!-- Copyright -->
        <div id="copyright">
            &copy; Designed by K. | All rights reserved.
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/skel-viewport.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>


</body>

</html>