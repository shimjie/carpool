<?php

class Area{
    private $area_id,
    $area_name,
    $region_id;

    function __construct($area_id, $area_name, $region_id){
        $this->area_id = $area_id;
        $this->area_name = $area_name;
        $this->region_id = $region_id;
    }

    public function GetAreaId(){
        return $this->area_id;
    }

    public function GetAreaName(){
        return $this->area_name;
    }

    public function GetRegionId(){
        return $this->region_id;
    }
}

class AreaList{
    private $areas;

    function __construct(){
        $this->areas = array();
    }

    public function AddArea($area_id, $region_name, $region_id){
        array_push($this->areas, new Area($area_id, $region_name, $region_id));
    }

    public function GetAreaList(){
        return $this->areas;
    }
}
?>