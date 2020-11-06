<?php
    session_start();

    require "../db_conn.php";
    include "../../model/user_detail.php";

    $perName = $_POST['perName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $query = "UPDATE user_detail
    SET perName = '$perName', phone= '$phone', email='$email'
    WHERE user_name = '". unserialize($_SESSION['user_detail'])->GetName() ."'";

    $_SESSION["user_detail"] = serialize(new user(unserialize($_SESSION['user_detail'])->GetName(), $perName, $phone, $email));

    if($mysqli->query($query))
        echo "true";
    else
        echo "false";
?>