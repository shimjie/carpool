<?php

class Region{
    private $region_id,
    $region_name;

    function __construct($region_id, $region_name){
        $this->region_id = $region_id;
        $this->region_name = $region_name;
    }

    public function GetRegionId(){
        return $this->region_id;
    }

    public function GetRegionName(){
        return $this->region_name;
    }
}

class RegionList{
    private $regions;

    function __construct(){
        $this->regions = array();
    }

    public function AddRegion($region_id, $region_name){
        array_push($this->regions, new Region($region_id, $region_name));
    }

    public function GetRegionList(){
        return $this->regions;
    }
}
?>