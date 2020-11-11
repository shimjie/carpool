<?php

class routine{
    private $id,
    $userid,
    $type,
    $pub_date,
    $start_area_id,
    $region_start,
    $area_start,
    $start_time,
    $des_area_id,
    $region_des,
    $area_des,
    $return_time,
    $passager_num,
    $description,
    $valid_time,
    $user_perName,
    $phone_open_status,
    $phone,
    $email_open_status,
    $email,
    $status,
    $request_type;

    function __construct($id, $userid, $type, $pub_date, $start_area_id, $region_start, $area_start, $start_time, 
                            $des_area_id, $region_des, $area_des, $return_time, 
                            $passager_num, $description, $valid_time,
                            $user_perName, $phone_open_status, $phone, $email_open_status, $email,
                            $status, $request_type){
        $this->id = $id;
        $this->userid = $userid;
        $this->type = $type;
        $this->pub_date = $pub_date;
        $this->start_area_id = $start_area_id;
        $this->region_start = $region_start;
        $this->area_start = $area_start;
        $this->start_time = $start_time;

        $this->des_area_id = $des_area_id;
        $this->region_des = $region_des;
        $this->area_des = $area_des;
        $this->return_time = $return_time;

        $this->passager_num = $passager_num;
        $this->description = $description;
        $this->valid_time = $valid_time;

        $this->user_perName = $user_perName;
        $this->phone_open_status = $phone_open_status;
        $this->phone = $phone;
        $this->email_open_status = $email_open_status;
        $this->email = $email;
        $this->status = $status;
        $this->request_type = $request_type;
    }

    public function GetId(){
        return $this->id;
    }

    public function GetUserId(){
        return $this->userid;
    }

    function GetType(){
        return $this->type;
    }

    function GetPubDate(){
        return $this->pub_date;
    }

    function GetStartId(){
        return $this->start_area_id;
    }

    function GetRegion(){
        return $this->region_start;
    }

    function GetArea(){
        return $this->area_start;
    }

    function GetStartTime(){
        return $this->start_time;
    }

    function GetDesId(){
        return $this->des_area_id;
    }

    function GetDesRegion(){
        return $this->region_des;
    }

    function GetDesArea(){
        return $this->area_des;
    }

    function GetReturnTime(){
        return $this->return_time;
    }

    function GetPassagerNum(){
        return $this->passager_num;
    }

    function GetDescription(){
        return $this->description;
    }

    function GetValidTime(){
        return $this->valid_time;
    }

    function GetName(){
        return $this->user_perName;
    }

    function GetPhoneStatus(){
        return $this->phone_open_status;
    }

    function GetPhone(){
        return $this->phone;
    }

    function GetEmailStatus(){
        return $this->email_open_status;
    }

    function GetEmail(){
        return $this->email;
    }

    function GetStatus(){
        return $this->status;
    }

    function GetRequestType(){
        return $this->request_type;
    }
    
}
?>