<!DOCTYPE html>
<html>
<head>
    <title>My Project</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="PROJECT1.css">

</head>
<body>
            <!-- navbar -->
            <nav class="nav navbar-expand-sm ">
                 <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbar5">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span class="navbar-brand order">
                    <img class="nav_img" src="council_logo.jpg" style="width: 40px">
                </span>

                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Project.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Events.html">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Services.php">Services</a>
                        </li>

                    </ul>

                <!-- Log in Modal -->
                <div class="navbar-collapse  dual-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#Modal" data-toggle="modal" data-target="#Modal">Log-in</a></li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar -->

            <div class="container Mcontainer">
            <div id="Modal" class="modal fade" >
                <div class="container Mcontainer ">
                    <div class="row login animate">
                        <div class="col ">
                        <form action="register.php" method="POST" style="border:1px solid #ccc">
                          <div class="container Mcontainer">
                            <h1>Sign Up</h1>
                            <p>Please fill in this form to create an account.</p>
                            <hr>

                            <label for="email"><b>Username</b></label>
                            <input type="text" placeholder="Enter Email" name="username" required>

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" id="pass" placeholder="Enter Password" name="password" required>

                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" id="pass1" placeholder="Repeat Password" name="password2" required>

                            <div class="clearfix">
                              <button type="button" class="cancelbtn">Cancel</button>
                              <button type="submit" name="signupbtn" class="signupbtn">Sign Up</button>
                            </div>
                          </div>
                        </form>
                        </div>

                        <!-- Log in -->
                        <div class="col ">
                            <form action="login.php" method="POST" style="border:1px solid #ccc">
                                <div class="container Mcontainer">
                                  <h1>Log In</h1>
                                  <hr>
                                  <label for="uname"><b>Username</b></label>
                                  <input type="text" placeholder="Enter Username" name="username" required>
                                  <label for="psw"><b>Password</b></label>
                                  <input type="password" placeholder="Enter Password" name="password" required>

                                  <button type="submit" name="loginbtn">Login</button>

                                </div>

                                <div class="container Mcontainer" style="background-color:#f1f1f1">
                                  <span class="psw">Forgot<a href="#" style="color: blue;"> password?</a></span>
                                </div>
                            </form>
                            <form action="logout.php">
                                  <button type="submit" name="logoutbtn">Log out</button>
                            </form>
                        </div>
                    </div>
                    <div class="container Mcontainer">
                        <div class="row justify-content-center">
                        <button type="button" onclick="document.getElementById('Modal').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTENT  -->
            <div class="container-fluid">
                 <div class="row" style="margin-left:5%">
                     <div class="col col-8 Main">
                        <div class="container-fluid">
                         <h1>Main content here</h1>
                         <hr>

                         <!-- new content -->
                          <div class="container">
                            <?php

                              include "dbh.php";

                              $sql = mysqli_query($db,"SELECT * FROM posts ORDER BY id desc");

                              while($row = mysqli_fetch_assoc($sql)){
                                ?>

                             <h2><?php echo $row['post']; ?></h2>

                              <?php }

                             ?>
                          </div>

                            <div class="container">
                                <h2 >Warriors 2018</h2>
                                <img class="d-block" src="Warriors.jpg" style="height: auto; width: 100%;">
                                <p>An article (with the linguistic glossing abbreviation ART) is a word that is used with a noun (as a standalone word or a prefix or suffix) to specify grammatical definiteness of the noun, and in some languages extending to volume or numerical scope.</p>
                            </div>
                            <button type="button" class="Readmore ">Read More</button>
                        </div>
                        <div class="container-fluid">
                         <hr>
                            <div class="container">
                                <h2>Warriors 2018</h2>
                                <img class="d-block" src="Warriors.jpg" style="height: auto; width: 100%;">
                                <p>An article (with the linguistic glossing abbreviation ART) is a word that is used with a noun (as a standalone word or a prefix or suffix) to specify grammatical definiteness of the noun, and in some languages extending to volume or numerical scope.</p>

                            </div>
                        </div>
                        <div class="container-fluid">
                         <hr>
                            <div class="container">
                                <h2>Warriors 2018</h2>
                                <img class="d-block" src="Warriors.jpg" style="height: auto; width: 100%;">
                                <p>An article (with the linguistic glossing abbreviation ART) is a word that is used with a noun (as a standalone word or a prefix or suffix) to specify grammatical definiteness of the noun, and in some languages extending to volume or numerical scope.</p>
                            </div>
                        </div>
                     </div>
                     <div class="col col-4 Main">
                        <div class="container-fluid">
                         <h2>Upcoming Events</h2>
                       </div>
                     </div>


                 </div>
            </div>
</body>
</html>
