<?php
    session_start();

    require "../db_conn.php";
    include "../../model/user_detail.php";

    $pwd = $_POST['pwd'];

    $query = "UPDATE user_infor
    SET pwd = '$pwd'
    WHERE user_name = '". unserialize($_SESSION['user_detail'])->GetName() ."'";

    if($mysqli->query($query))
        echo "true";
    else
        echo "false";
?>