<?php
    
    include "../../model/area.php";

    //mysql connection (hostname, username, password, dbname);
    $mysqli3 = new mysqli('127.0.0.1', 'root', '', 'sharingweb'); 

    //check connection
    if (mysqli_connect_errno())
    { 
        printf("Connect failed: %s\n", mysqli_connect_error()); 
        exit(); 
    } 

    $areaList = new AreaList();

    $query = "SELECT * FROM area";
    $result = $mysqli3->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
            $areaList->AddArea($row["area_id"], $row["area_name"], $row["region_id"]);
    }

    $mysqli3->close();
?>