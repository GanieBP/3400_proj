<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="PROJECT1.css">
      <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
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
                            <a class="nav-link" href="#">Services</a>
                        </li>
                    </ul>

                    <div class="navbar-collapse  dual-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><form action="logout.php">
                                 <a href="Project.php" name="logoutbtn">Log out</a>
                            </form></li>
                    </ul>
                </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col profile inline">
                    <div style="width:300px; height: 300px; border:1px solid;">Image here</div>
                    <?php
                        session_start();
                        if(isset($_SESSION['username']))

                        echo $_SESSION['username'];
                    ?>
                </div>
            </div>
            <div class="container">
                <form action="post.php" method="POST">
                <div class="col">
                    <input type="text" name="body">
                    <button type="submit" name="post" class="btn btn-light btn_post">Post</button>
                </div>
                </form>
            </div>
        </div>

</body>
</html>
