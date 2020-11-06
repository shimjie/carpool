<?php

class user{
    $name,
    $per_name,
    $phone,
    $email;

    function __construct($name, $per_name, $phone, $email){
        $this->name = $name;
        $this->per_name = $per_name;
        $this->phone = $phone;
        $this->email = $email;
    }

    function GetName(){
        return $this->name;
    }

    function GetPerName(){
        return $this->name;
    }

    function SetPerName($per_name){
        $this->per_name = $per_name;
    }

    function GetPhone(){
        return $this->phone;
    }

    function SetPhone(){
        return $this->phone;
    }
}
?>