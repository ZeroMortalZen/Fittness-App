<?php


class account
{
    //properties
    public $username;
    public $password;
    public $email;


    //class constructor
    function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    //set methods
    function set_username($username)
    {
        $this->username = $username;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    function set_password($password)
    {
        $this->password = $password;
    }

    //get methods
    function get_username()
    {
        return $this->username;
    }
    function get_email(){
        return $this->email;
    }
    function get_password()
    {
        return $this->password;
    }
}
?>