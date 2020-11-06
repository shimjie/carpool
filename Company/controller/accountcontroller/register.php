<?php

    $user = $_POST['userName'];
    $pwd = $_POST['pwd'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    require "../db_conn.php";
    include "../../model/user_detail.php";

    $query = "select * from user_infor where username = '$user'";
    $result = $mysqli->query($query);
    if($result->num_rows <= 0){

        $query = "INSERT INTO user_infor (`user_name`, `pwd`) VALUES ('$user','$pwd')";
        $query2 = "INSERT INTO user_detail (`user_name`, `perName`, `phone`, `email`) VALUES ('$user','$user','$phone','$email')";

        if($mysqli->query($query) && $mysqli->query($query2)){
            $_SESSION["user"] = $user;
            $_SESSION["user_detail"] = new user($user, $user, $phone, $email);
            echo "True";
        }
        else
            echo "False!";
    }
    else
        echo "False!";

    $mysqli->close();

?>