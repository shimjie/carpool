<?php

    require "controller/db_conn.php";
    include "model/routine_detail.php";

    $query = "
    SELECT rss.*, da.area_name as des_area, da.region_name as des_region
    FROM(
        SELECT rs.*, sa.area_name as start_area, sa.region_name as start_region
        FROM(
            SELECT routine_driver_infor.*, user_detail.perName, user_detail.phone, user_detail.email, user_detail.driver_rate
            FROM routine_driver_infor, user_detail, user_infor
            WHERE routine_driver_infor.user_id = user_infor.id and user_infor.user_name = user_detail.user_name) rs
        JOIN (SELECT area.area_id, area.area_name, region.region_id, region.region_name FROM area, region WHERE area.region_id = region.region_id) sa on rs.start_point = sa.area_id) rss
    JOIN (SELECT area.area_id, area.area_name, region.region_id, region.region_name FROM area, region WHERE area.region_id = region.region_id) da on rss.destination = da.area_id";
    //Get basic data from routine_driver_infor, user_detail and user_infor
    //Join region & area data base on start_point id
    //Join region & area base on destination id

    $routineList = array();
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
            array_push($routineList, new routine($row["id"], $row["user_id"], $row["type"], $row["pub_date"], 
            $row["start_point"], $row["start_region"], $row["start_area"], $row["start_time"], 
            $row["destination"], $row["des_region"], $row["des_area"], $row["return_time"], 
            $row["passager_num"], $row["description"], $row["valid_time"], 
            $row["perName"], $row["phone_open"], $row["phone"], $row["email_open"], $row["email"], $row["open_status"], $row["request_type"]));
    }

    $mysqli->close();

?>