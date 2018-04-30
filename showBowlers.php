<?php
session_start();
?>

<!doctype html>


<head>
    <title>Bowlers Names</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
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
      include ('config.php');
      
      $connect=mysqli_connect (SERVER, USER, PW, DB);
      
      if(!$connect)
      {
          die(" ERROR, can not connect to 'DB' using name 'USER'(".mysqli_connect_errno().", ".mysquli_connect_error().")");
             
      }
      
      
      $userQuery = "SELECT first_name, last_name FROM bowlers ORDER by last_name ASC";
      
      $result = mysqli_query ($connect, $userQuery);
      
      if(!$result)
      {
          die("could not run query ($userQuery) from 'DB'". mysqli_error($connect));
          
      }
      
      if (mysqli_num_rows($result)==0)
      {
          echo'no records found with $userQuery';
          
          
      }
      
      else
      {
          print("<h1>Bowlers</h1>");
       print("<table border = \"1\">");
           print("<tr><th>FIRST NAME</th><th>LAST NAME</th></tr>");
          while ($row=mysqli_fetch_assoc($result))
          {
              print("<tr><td>".$row['first_name']."</td><td>" .$row['last_name']. "</td></tr>");
          }
          
           print("</table>");
      }
      
      mysqli_close($connect);
      
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
                                            <li><a href="registration-form.php">Register</a></li>
                                            <li><a href="signin.php">Sign In</a></li>
                                            <li><a href="index.html">Logout</a></li>

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



        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/skel-viewport.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
</body>

</html>