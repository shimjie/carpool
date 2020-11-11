<?php
    include "../../model/region.php";

    //mysql connection (hostname, username, password, dbname);
    $mysqli3 = new mysqli('127.0.0.1', 'root', '', 'sharingweb'); 

    //check connection
    if (mysqli_connect_errno())
    { 
        printf("Connect failed: %s\n", mysqli_connect_error()); 
        exit(); 
    } 

    $regionList = new RegionList();

    $query = "SELECT * FROM region";
    $result = $mysqli3->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
            $regionList->AddRegion($row["region_id"], $row["region_name"]);
    }

    $mysqli3->close();
?>