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

    public function GetPerName(){
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

    function GetEmail(){
        return $this->phone;
    }

    function Set    Email($email){
        $this->email = $email;
    }
}
?>