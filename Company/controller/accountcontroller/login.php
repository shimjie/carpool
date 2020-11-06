<?php
    session_start();

    $user = $_POST['userName'];
    $pwd = $_POST['pwd'];

    require "../db_conn.php";
    include "../../model/user_detail.php"

    $query = "select * from user_infor where user_name = '$user' and pwd = '$pwd'";
    $result = $mysqli->query($query);

    if($result->num_rows <= 0){
        echo "false";
    }
    else{
        $_SESSION["user"] = $user;

        $query = "select * from user_detail where user_name = '$user'";

        $result = $mysqli->query($query);
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc())
                $_SESSION["user_detail"] = new user($row["user_name"], $row["perName"], $row["phone"], $row["email"]);
        }

        echo "true";
        echo "true";
        echo "true";
    }

    //comment, it is a test

?>