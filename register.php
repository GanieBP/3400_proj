<?php
    include "dbh.php";

    if(isset($_POST['signupbtn'])) {
        session_start();
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

        $check_uname = mysqli_query($db,"SELECT * FROM users WHERE username = '$username'");
        $check_email = mysqli_query($db,"SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($check_uname) > 0) {
            echo "<script>
            alert('Username already existing');
            window.open('Project.php','_self');
            </script>";
        }
        elseif (mysqli_num_rows($check_email) >0) {
             echo "<script>
            alert('Email already existing');
            window.open('Project.php','_self');
            </script>";
        }
        else {
        //$password = md5($password); hash pass before storing for security purposes
        $sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
        $result = mysqli_query($db, $sql);
        header("location: Project.php");
        }
    }
?>



