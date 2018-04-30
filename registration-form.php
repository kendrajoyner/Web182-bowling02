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

                            <button onclick="document.getElementById('id01').style.display='block'" class="button-big" style="width:auto;">Register</button>

                            <div id="id01" class="modal">

                                <form class="modal-content animate" action="registration.php" method="post">
                                    <div class="imgcontainer">
                                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                                    </div>

                                    <div class="container">
                                        <label for="firstname"></label>
                                        <input type="text" placeholder="Enter First Name" name="firstname" required>

                                        <label for="lastname"></label>
                                        <input type="text" placeholder="Enter Last Name" name="lastname" required>

                                        <label for="email"></label>
                                        <input type="text" placeholder="Enter Email" name="email" required>

                                        <label for="pass"></label>
                                        <input type="password" placeholder="Enter Password" name="pass" required>

                                        <button type="submit">Register</button>

                                    </div>


                                </form>
                            </div>

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