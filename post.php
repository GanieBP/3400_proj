<?php
    include "dbh.php";

    if(isset($_POST['post'])) {
        session_start();
        $post = mysqli_real_escape_string($db, $_POST['body']);
        $sql = "INSERT INTO posts(post) VALUES('$post')";
        $result = mysqli_query($db,$sql);
        header("location: Project.php");
    }
?>
