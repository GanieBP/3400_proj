<?php
    include "dbh.php";

    if(isset($_POST['loginbtn'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * From users WHERE username ='$username'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if ($row['password'] == $password) {
                session_start();
                echo "Welcome user!";
                $_SESSION['message'] = "You are now logged in!";
                $_SESSION['username'] = $username;
                header("location: profile.php");
            }
            else {
                echo "Wrong password!";
            }
          }
          else{
              echo "no user found";
          }
    }


?>
