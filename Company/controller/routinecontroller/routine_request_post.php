<?php
    session_start();

    $processType = $_POST['processType'];
    $type = $_POST['type'];
    $from_area = $_POST['from_area'];
    $to_area = $_POST['to_area'];
    $start_date = $_POST['start_date'];
    $return_date = $_POST['return_date'];
    $vaild_date = $_POST['vaild_date'];
    $psg_num = $_POST['psg_num'];
    $description = $_POST['description'];

    require "../db_conn.php";

    $query = "";

    if($processType == '0'){

        $query = "
        INSERT INTO driver_infor (`user_id`, `type`, `start_point`, `start_time`, `destination`, `return_time`, `passager_num`, `description`, `valid_time`, `phone_open`, `email_open`, `open_status`) 
        VALUES ('1', '$type', '$from_area', '$start_date', '$to_area', '$return_date', '$psg_num', '$description', '$vaild_date', '1', '1', '1');";
    }
    else{
        $query = "
        INSERT INTO passager_infor (`user_id`, `type`, `start_point`, `start_time`, `destination`, `return_time`, `passager_num`, `description`, `valid_time`, `phone_open`, `email_open`, `open_status`) 
        VALUES ('1', '$type', '$from_area', '$start_date', '$to_area', '$return_date', '$psg_num', '$description', '$vaild_date', '1', '1', '1');";
    }

    if($mysqli->query($query))
        echo true;
    else
        echo false;
?>