<?php

class User
{
    //properties
    public $firstname;
    public $last_name;


    //class constructor
    function __construct($firstname, $last_name)
    {
        $this->firstname = $firstname;
        $this->last_name = $last_name;

    }
}

//Will display in DASHBORAD UI page