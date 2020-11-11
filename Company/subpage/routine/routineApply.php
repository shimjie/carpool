<?php
    require "../../controller/routinecontroller/region_load.php";
    require "../../controller/routinecontroller/area_load.php";
?>

<div id = "match_result_page">
    <div class="form-toggle match_page_close visible"></div>

    <div class="spinner-border invisible" style="width: 10rem; height: 10rem; position: absolute;" role="status"></div>

    <div id = "match_page_content"></div>

    <button type="button" class="btn btn-primary match_post_button">Post Anyway</button>
</div>

<div class="form-toggle applypageclosebtn visible"></div>

<!-- Form-->
<div class="form" id = "driver-apply">
    <div class="form-panel one driv_apply" style="height: 80vh; overflow-x: auto;">
        <div class="form-header">
            <h1>Driver Application</h1>
        </div>
        <div class="form-content">
            <form>
                <div><!-- routine toggle -->
                    <div class="btn-group btn-group-toggle" data-toggle="buttons" id = "driver_routine_type">
                        <label class="btn btn-outline-success active">
                            <input type="radio" name="driver_options" id="option1" value = '0' checked> One Way
                        </label>
                        <label class="btn btn-outline-success">
                            <input type="radio" name="driver_options" id="option2" value = '1'> Return
                        </label>
                    </div>
                </div>

                <div class="form-group"></div>

                <div class="form-group">
                    <div class="form-row">
                        <label>From: </label> 
                    </div>
                </div>
                
                <div class="form-group"><!-- from -->
                    
                    <div class="form-row">
                        <div class="col">
                            <label>Region </label>   
                            <select  id = "driver_from_region" class="form-control">
                                <option value = 0 selected>Choose...</option>
                                <?php
                                    foreach($regionList->GetRegionList() as $region){
                                        echo "<option value = ". $region->GetRegionId(). ">". $region->GetRegionName(). "</option>";
                                    }
                                ?>
                            </select>
                        </div> <!-- form-group end.// -->
                        
                        <div class="col">
                            <label>Area</label>
                            <select id = "driver_from_area" class="form-control" disabled>
                                <option value = 0 selected>Choose...</option>
                                <?php
                                    foreach($areaList->GetAreaList() as $area){
                                        echo "<option id = '". $area->GetRegionId()."' value = ". $area->GetAreaId(). ">". $area->GetAreaName(). "</option>";
                                    }
                                ?>
                            </select>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                </div>


                <div class="form-group">
                    <div class="form-row">
                        <label>To: </label> 
                    </div>
                </div>
                
                <div class="form-group"><!-- from -->
                    
                    <div class="form-row">
                        <div class="col">
                            <label>Region </label>   
                            <select id = "driver_to_region" class="form-control">
                                <option value = 0 selected>Choose...</option>
                                <?php
                                    foreach($regionList->GetRegionList() as $region){
                                        echo "<option value = ". $region->GetRegionId(). ">". $region->GetRegionName(). "</option>";
                                    }
                                ?>
                            </select>
                        </div> <!-- form-group end.// -->
                        <div class="col">
                            <label>Area</label>
                            <select id = "driver_to_area" class="form-control" disabled>
                                <option value = 0 selected>Choose...</option>
                                <?php
                                    foreach($areaList->GetAreaList() as $area){
                                        echo "<option id = '". $area->GetRegionId()."' value = ". $area->GetAreaId(). ">". $area->GetAreaName(). "</option>";
                                    }
                                ?>
                            </select>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Depart Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="depart-time">Depart Time:</label>

                            <input type="datetime-local" id="driver_depart_time"
                                 value="2018-06-12T19:30"
                                min="2018-06-07T00:00" style="background-color:white; border: 1px solid black;">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Return Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="return-time">Return Time:</label>

                            <input type="datetime-local" id="driver_return_time"
                                 value="2018-06-12T19:30"
                                min="2018-06-07T00:00" style="background-color:white; border: 1px solid black;">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Depart Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="depart-time">Request Vailde Time:</label>

                            <input type="datetime-local" id="driver_request_vaild_time"
                                value="2018-06-12T19:30"
                                min="2018-06-07T00:00" style="background-color:white; border: 1px solid black;">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><label for="username">Number of Passager</label><input type="text" id="driver_num_passager" style="background-color:white; border: 1px solid black;" required="required" /></div>

                <div class="form-group"><label for="username">Description</label>
                    <textarea id="driver_description" name="w3review" rows="4" cols="50"></textarea>
                </div>
                <div class="form-group"><button onclick="MatchResultShow(0)" >Submit</button></div>
            </form>
        </div>
    </div>
</div>

<div class="form" id = "passager-apply">
    <div class="form-panel one pass_apply" style="height: 80vh; overflow-x: auto;">
        <div class="form-header">
            <h1>Passager Application</h1>
        </div>
        <div class="form-content">
            <form>
                <div><!-- routine toggle -->
                    <div class="btn-group btn-group-toggle" data-toggle="buttons" id = "passager_routine_type">
                        <label class="btn btn-outline-success active">
                            <input type="radio" name="passager_options" id="option1" value = '0' checked> One Way
                        </label>
                        <label class="btn btn-outline-success">
                            <input type="radio" name="passager_options" id="option2" value = '1'> Return
                        </label>
                    </div>
                </div>

                <div class="form-group"></div>

                <div class="form-group">
                    <div class="form-row">
                        <label>From: </label> 
                    </div>
                </div>
                
                <div class="form-group"><!-- from -->
                    
                    <div class="form-row">
                        <div class="col">
                            <label>Region </label>   
                            <select  id = "passager_from_region" class="form-control">
                                <option value = 0 selected>Choose...</option>
                                <?php
                                    foreach($regionList->GetRegionList() as $region){
                                        echo "<option value = ". $region->GetRegionId(). ">". $region->GetRegionName(). "</option>";
                                    }
                                ?>
                            </select>
                        </div> <!-- form-group end.// -->
                        
                        <div class="col">
                            <label>Area</label>
                            <select id = "passager_from_area" class="form-control" disabled>
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                </div>


                <div class="form-group">
                    <div class="form-row">
                        <label>To: </label> 
                    </div>
                </div>
                
                <div class="form-group"><!-- from -->
                    
                    <div class="form-row">
                        <div class="col">
                            <label>Region </label>   
                            <select id = "passager_to_region" class="form-control">
                                <option value = 0 selected>Choose...</option>
                                <?php
                                    foreach($regionList->GetRegionList() as $region){
                                        echo "<option value = ". $region->GetRegionId(). ">". $region->GetRegionName(). "</option>";
                                    }
                                ?>
                            </select>
                        </div> <!-- form-group end.// -->
                        <div class="col">
                            <label>Area</label>
                            <select id = "passager_to_area" class="form-control" disabled>
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Depart Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="depart-time">Depart Time:</label>

                            <input type="datetime-local" id="passager_depart_time"
                                value="2018-06-12T19:30"
                                min="2018-06-07T00:00" style="background-color:white; border: 1px solid black;">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Return Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="return-time">Depart Time:</label>

                            <input type="datetime-local" id="passager_return_time"
                                value="2018-06-12T19:30"
                                min="2018-06-07T00:00" style="background-color:white; border: 1px solid black;">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Depart Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="depart-time">Request Vailde Time:</label>

                            <input type="datetime-local" id="passager_request_vaild_time"
                                value="2018-06-12T19:30"
                                min="2018-06-07T00:00" style="background-color:white; border: 1px solid black;">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><label for="username">Number of Passager</label><input type="text" id="passager_num_passager" style="background-color:white; border: 1px solid black;" required="required" /></div>

                <div class="form-group"><label for="username">Description</label>
                    <textarea id="passager_description" name="w3review" rows="4" cols="50"></textarea>
                </div>
                <div class="form-group"><button type="submit" onclick="MatchResultShow(0)">Submit</button></div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/routine-Apply.js"></script>