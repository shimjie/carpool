<?php

class user{
    private $name,
    $per_name,
    $phone,
    $email;

    function __construct($name, $per_name, $phone, $email){
        $this->name = $name;
        $this->per_name = $per_name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function GetName(){
        return $this->name;
    }

    public function GetPerName(){
        return $this->per_name;
    }

    function SetPerName($per_name){
        $this->per_name = $per_name;
        echo $per_name;
        echo $this->per_name;
    }

    function GetPhone(){
        return $this->phone;
    }

    function SetPhone($phone){
        $this->phone = $phone;
    }

    function GetEmail(){
        return $this->email;
    }

    function SetEmail($email){
        $this->email = $email;
    }
}
?>