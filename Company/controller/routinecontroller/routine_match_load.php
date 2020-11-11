<?php
    
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
    include "../../model/routine_detail.php";

    $query = "";

    if($processType == '0'){

        $query = "
        SELECT rss.*, da.area_name as des_area, da.region_name as des_region
        FROM(
            SELECT rs.*, sa.area_name as start_area, sa.region_name as start_region
            FROM(
                SELECT routine_driver_infor.*, user_detail.perName, user_detail.phone, user_detail.email, user_detail.driver_rate
                FROM routine_driver_infor, user_detail, user_infor
                WHERE routine_driver_infor.request_type = 0 and routine_driver_infor.user_id = user_infor.id and user_infor.user_name = user_detail.user_name and
                ((routine_driver_infor.start_point = '$from_area' and routine_driver_infor.destination = '$to_area' 
                and  ABS(timediff(routine_driver_infor.start_time, '$start_date')) / 3600.0 < 2 and (ABS(timediff(routine_driver_infor.return_time, '$return_date'))/ 3600.0 < 2 or routine_driver_infor.return_time IS null))
                or (ABS(timediff(routine_driver_infor.return_time, '$start_date')) / 3600.0 < 2))) rs
            JOIN (SELECT area.area_id, area.area_name, region.region_id, region.region_name FROM area, region WHERE area.region_id = region.region_id) sa on rs.start_point = sa.area_id) rss
        JOIN (SELECT area.area_id, area.area_name, region.region_id, region.region_name FROM area, region WHERE area.region_id = region.region_id) da on rss.destination = da.area_id";
    }
    else{
        $query = "
        SELECT rss.*, da.area_name as des_area, da.region_name as des_region
        FROM(
            SELECT rs.*, sa.area_name as start_area, sa.region_name as start_region
            FROM(
                SELECT routine_driver_infor.*, user_detail.perName, user_detail.phone, user_detail.email, user_detail.driver_rate
                FROM routine_driver_infor, user_detail, user_infor
                WHERE routine_driver_infor.request_type = 0 and routine_driver_infor.user_id = user_infor.id and user_infor.user_name = user_detail.user_name and
                routine_driver_infor.start_point = '$from_area' and routine_driver_infor.destination = '$to_area' 
                and  ABS(timediff(routine_driver_infor.start_time, '$start_date')) / 3600.0 < 2 and ABS(timediff(routine_driver_infor.return_time, '$return_date'))/ 3600.0 < 2) rs
            JOIN (SELECT area.area_id, area.area_name, region.region_id, region.region_name FROM area, region WHERE area.region_id = region.region_id) sa on rs.start_point = sa.area_id) rss
        JOIN (SELECT area.area_id, area.area_name, region.region_id, region.region_name FROM area, region WHERE area.region_id = region.region_id) da on rss.destination = da.area_id";
    }


    $matchEoutineList = array();
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
            array_push($matchEoutineList, new routine($row["id"], $row["user_id"], $row["type"], $row["pub_date"], 
            $row["start_point"], $row["start_region"], $row["start_area"], $row["start_time"], 
            $row["destination"], $row["des_region"], $row["des_area"], $row["return_time"], 
            $row["passager_num"], $row["description"], $row["valid_time"], 
            $row["perName"], $row["phone_open"], $row["phone"], $row["email_open"], $row["email"], $row["open_status"], $row["request_type"]));
    }

    $mysqli->close();

    foreach($matchEoutineList as $routine){
        echo "
        <section id='blog' class='blog'>
        <div class='container'>
          <div class='row'>
            <div class='col-lg-16 entries'>
              <article class='entry' data-aos='fade-up' style='background:white;'>
                <h2 class='entry-title'>Hobart Sharing Routine</h2>
                <div class='entry-meta'>
                  <ul>
                    <li class='d-flex align-items-center'><i class='icofont-user'></i>". $routine->GetName(). "</li>
                    <li class='d-flex align-items-center'><i class='icofont-map-pins'></i>From "
                    . $routine->GetArea(). " ". $routine->GetRegion(). " to 
                    ". $routine->GetDesArea(). " ". $routine->GetDesRegion()."</li>
                  </ul>

                  <ul>
                    <li class='d-flex align-items-center'><i class='icofont-car-alt-3'></i> <time>". $routine->GetStartTime() ."</time></li>";

                  if($routine->GetType() == 1)
                    echo  "<li class='d-flex align-items-center'><i class='icofont-van'></i> <time>". $routine->GetReturnTime() ."</time></li>";



                  echo  "<li class='d-flex align-items-center'><i class='icofont-wall-clock'></i><time>". $routine->GetValidTime()."</time></li>
                  </ul>
                </div>
  
                <div class='entry-content'>
                  <p>
                    description:
                    <br>
                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                  </p>

                  <a data-toggle='collapse' href='#collapse_". $routine->GetId()."' aria-expanded='false' aria-controls='collapse_". $routine->GetId()."'>
                    Contact Method
                  </a>
                  <div class='entry-meta collapse' id='collapse_". $routine->GetId()."'>
                    <ul>
                      <li class='d-flex align-items-center'><i class='icofont-smart-phone'></i>". $routine->GetPhone(). "</li>
                      <li class='d-flex align-items-center'><i class='icofont-envelope-open'></i>". $routine->GetEmail(). "</li>
                    </ul>
                  </div>

                  <div class='read-more'>
                    <a href='blog-single.html'>Apply</a>
                  </div>
                </div>

            </article><!-- End blog entry -->
          </div>
        </div>
    </section>
        ";
    }
?>